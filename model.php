<?php
function insertData($input, $conn)
{
    $firstname = $input['first_name'];
    $lastname = $input['last_name'];
    $email = $input['email'];
    $bio = $input['bio'];
    $tech = $input['technologies'];
    $time = $input['timestamp'];
    $sign = $input['signature'];
    $git = $input['vcs_uri'];

    $stmt = $conn->prepare("INSERT INTO data (first_name, last_name, email, bio, technologies, timeint, signature, vcs_uri) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiss", $firstname, $lastname, $email, $bio, $tech, $time, $sign, $git);
    $stmt->execute();
    echo 'andmed sisestatud';
}