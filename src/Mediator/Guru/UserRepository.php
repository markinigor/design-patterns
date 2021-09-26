<?php

namespace App\Mediator\Guru;

/**
 * В отличие от нашего примера паттерна Наблюдатель, этот пример заставляет
 * ПользовательскийРепозиторий действовать как обычный компонент, который не
 * имеет никаких специальных методов, связанных с событиями. Как и любой другой
 * компонент, этот класс использует ДиспетчерСобытий для трансляции своих
 * событий и прослушивания других.
 *
 * @see \RefactoringGuru\Observer\RealWorld\UserRepository
 */
class UserRepository implements Observer
{
    /**
     * @var array Список пользователей приложения.
     */
    private $users = [];

    /**
     * Компоненты могут подписаться на события самостоятельно или через
     * клиентский код.
     */
    public function __construct()
    {
        events()->attach($this, "users:deleted");
    }

    /**
     * Компоненты могут принять решение, будут ли они обрабатывать событие,
     * используя его название, источник или какие-то контекстные данные,
     * переданные вместе с событием.
     */
    public function update(string $event, object $emitter, $data = null): void
    {
        switch ($event) {
            case "users:deleted":
                if ($emitter === $this) {
                    return;
                }
                $this->deleteUser($data, true);
                break;
        }
    }

    // Эти методы представляют бизнес-логику класса.

    public function initialize(string $filename): void
    {
        echo "UserRepository: Loading user records from a file.\n";
        // ...
        events()->trigger("users:init", $this, $filename);
    }

    public function createUser(array $data, bool $silent = false): User
    {
        echo "UserRepository: Creating a user.\n";

        $user = new User();
        $user->update($data);

        $id = bin2hex(openssl_random_pseudo_bytes(16));
        $user->update(["id" => $id]);
        $this->users[$id] = $user;

        if (!$silent) {
            events()->trigger("users:created", $this, $user);
        }

        return $user;
    }

    public function updateUser(User $user, array $data, bool $silent = false): ?User
    {
        echo "UserRepository: Updating a user.\n";

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return null;
        }

        $user = $this->users[$id];
        $user->update($data);

        if (!$silent) {
            events()->trigger("users:updated", $this, $user);
        }

        return $user;
    }

    public function deleteUser(User $user, bool $silent = false): void
    {
        echo "UserRepository: Deleting a user.\n";

        $id = $user->attributes["id"];
        if (!isset($this->users[$id])) {
            return;
        }

        unset($this->users[$id]);

        if (!$silent) {
            events()->trigger("users:deleted", $this, $user);
        }
    }
}