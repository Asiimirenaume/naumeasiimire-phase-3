<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$usersFile = 'users.json';
$messagesFile = 'messages.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sender = $_SESSION['user_id'];
    $receiver = $_POST['receiver'];
    $messageContent = $_POST['message'];

    $users = json_decode(file_get_contents($usersFile), true);
    $messages = json_decode(file_get_contents($messagesFile), true);

    $receiverExists = false;
    foreach ($users as $user) {
        if ($user['username'] == $receiver) {
            $receiverExists = true;
            break;
        }
    }

    if ($receiverExists) {
        $message = [
            'sender' => $sender,
            'receiver' => $receiver,
            'message' => $messageContent,
            'timestamp' => date("Y-m-d H:i:s")
        ];
        $messages[] = $message;
        file_put_contents($messagesFile, json_encode($messages));
        echo "Message sent successfully!";
    } else {
        echo "Receiver not found.";
    }
}

$messages = json_decode(file_get_contents($messagesFile), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
        body {
            background-color: #034439; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
    
        }
            <div class="container mt-5">
        <h2>Messages</h2>
        <form action="[_{{{CITATION{{{_1{](https://github.com/Kalyani-31121/phpmysqlworkshopiitb/tree/aaf51e4d57a63a8dc47b586ad6bbde763b287999/Day6%2C_7%2Faddstudent.php)[_{{{CITATION{{{_2{](https://github.com/namntgch18325/Nguyen-Tien-Nam/tree/b4657108812d898167ccec262568d71e2a3b84f6/mvc%2Fview%2Fregister.php)[_{{{CITATION{{{_3{](https://github.com/dicky08/ppdb-online/tree/1f6bcdbb52a2fe879479fca48aeb762a2362b6cb/assets%2Fakun.php)[_{{{CITATION{{{_4{](https://github.com/daunenok/authentication/tree/b31a193f6cebca813b9cc1296d4a3c11d7c8e6ba/register.php)[_{{{CITATION{{{_5{](https://github.com/NickiSnow/SpiralComics/tree/919417d18f5871bd540391ab4ffbbf2710db035b/title.php)[_{{{CITATION{{{_6{](https://github.com/mayprojects/coba1/tree/30b0855031bc394fecddbfc99ee891afd1910c53/application%2Fviews%2Fpage%2Finput.php)[_{{{CITATION{{{_7{](https://github.com/dylansapienza/Jukebox/tree/e508b8ebc91d6696482f34c5e3adbc0416f7b536/register.php)[_{{{CITATION{{{_8{](https://github.com/FNVI/Authentication/tree/a09e003cb1dc2a8851bf028d1eb65784ad55a169/examples%2Fregular%2Fsignup.php)[_{{{CITATION{{{_9{](https://github.com/vivi-et/bbayouaws/tree/b98fc842a5039d450ff53943f111e7be30dd76ca/resources%2Fviews%2Fsession%2Fcreate.blade.php)[_{{{CITATION{{{_10{](https://github.com/chereshnyabtw/image-hosting/tree/f7f7c4fa8fd09ee17bab316388bd48d675d3bcfe/resources%2Fviews%2Fregister.blade.php)[_{{{CITATION{{{_11{](https://github.com/MatW00/WF3Croisiere/tree/0a8efbb71b3be0536275a09851c981fba4accf2d/Cours%2FJour_2%2FCours%2F3_forms.php)[_{{{CITATION{{{_12{](https://github.com/wiindha/PraktikumWebD/tree/8e0aa794f31847c2ad46b081a1427cafec12f6fe/Tugas12%2FMasuk.php)[_{{{CITATION{{{_13{](https://github.com/ajins15/pw2020_193040046/tree/6d81ad7d6c4fbeffef81027c673b088aee72e235/praktikum%2FP7_PW_193040046%2Flatihan7a%2Fphp%2Flogin.php)[_{{{CITATION{{{_14{](https://github.com/nciganovic/test/tree/12fb808738c20a83d3520add1e60589477f705df/login.php)[_{{{CITATION{{{_15{](https://github.com/TheDegDeg/TennisClub/tree/97304472aaccefc521735818c117035d1607c73e/test%2Fsignup.php)[_{{{CITATION{{{_16{](https://github.com/rifaalifia/gudang-produksi/tree/3084b36b3d77565946e7ab69304e209bcf987f97/resources%2Fviews%2Flogin%2Flayout.blade.php)[_{{{CITATION{{{_17{](https://github.com/Robtych121/desktop-app/tree/08904067af14f218b95f141278c7a178f9e8ba28/login.php)[_{{{CITATION{{{_18{](https://github.com/NirajanBekoju/News-Portal/tree/a5717c79667cd8613ecd95acf68c8d4109e694f8/dashboard%2Flogin.php)[_{{{CITATION{{{_19{](https://github.com/fissban/PhpModels/tree/d819ad98ebf3521320bc367d9fcd12219f617822/SistemaDePagVer2%2Findex.php)[_{{{CITATION{{{_20{](https://github.com/Alson33/Minor_Project_SBR/tree/9cb6e7545623ee20314f04a33df4a94e529cd05a/PAGES%2Fprofile.php)[_{{{CITATION{{{_21{](https://github.com/hemanthcmbadoor/laravellogin/tree/ddd3925ee4a45836a2faaa7a15cd095687d2cf31/resources%2Fviews%2Flayouts%2Fprofile.blade.php)[_{{{CITATION{{{_22{](https://github.com/pankkap/phpCode/tree/79bfe627eb67c7f254421afbacddaac0cf619d28/02-Classes%2FSection-3E%2F05-Database%2Fprofile.php)[_{{{CITATION{{{_23{](https://github.com/ctec-127/ctec-227-lab-1-CodyCMartin/tree/676779964854e679aaff81579170b186ad52a94d/destroy_session.php)[_{{{CITATION{{{_24{](https://github.com/derickyudanegara/Software-Engineering-Project/tree/11227cae38bf50127b493ebe2b1ad74b24220279/Source%20Code%20Keliling.com%2Fcreate-post%2Fpost-bali.php)[_{{{CITATION{{{_25{](https://github.com/Selim-Reza-Swadhin/PHPCourse2020/tree/231f23c8d73ac697a9942a47e72a3297c931c811/13_todo_list_with_fs%2Findex.php)[_{{{CITATION{{{_26{](https://github.com/kumarabhiyadav/phpfirsttrial/tree/4be832c36c307dfa13f1539f16a05cfa415e2a0d/test%2Fsubmit.php)