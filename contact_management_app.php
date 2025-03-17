<?php
$contacts = [];

function addContact(array &$contacts, string $name, string $email, string $phone): array
{
    $contacts[] = [
        'name'  => $name,
        'email' => $email,
        'phone' => $phone,
    ];

    return $contacts;
}

function displayContacts(array $contacts): void
{
    if (empty($contacts)) {
        echo "No contacts found\n";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
}

while (true) {
    echo "Contact Management System\n";
    echo "1. Add Contact\n";
    echo "2. View Contact\n";
    echo "3. Exit\n";

    $choice = (int) readline("Enter your choice: ");

    if ($choice === 1) {
        $name  = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone: ");

        $contacts = addContact($contacts, $name, $email, $phone);
        echo "Contact added successfully!\n";

    } elseif ($choice === 2) {
        displayContacts($contacts);

    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;

    } else {
        echo "Invalid choice! Please enter a valid option.\n";
    }
}
