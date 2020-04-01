<?php


class UserRepository
{
    function saveUser(string $username, string $password)
    {
        $data = $this->readData();
        $data[] = ['username' => $username, 'password' => $password];

        file_put_contents('RegisteredUsers.json', json_encode($data));
    }

    function loginUser(string $username, string $password) : bool
    {
        $data = $this->readData();
        foreach ($data as $user) {
            if (($user->username === $username) && ($user->password === $password)) {
                return true;
            }
        }
        return false;
    }

    function readData(): array
    {
        $json = file_get_contents('RegisteredUsers.json');
        return json_decode($json);
    }
}
