<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $username): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE username = :username
        ');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['username'],
            $user['isAdmin']
        );
    }
    public function addUser(User $user)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (username, email, password, isAdmin)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getUsername(),
            $user->getEmail(),
            $user->getPassword(),
            $user->isAdmin()
        ]);
    }
}