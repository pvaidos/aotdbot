<?php

  $webhook_url = 'https://discord.com/api/webhooks/1192109223656566794/uBuGS5gU1_IPCeRGYYxcBAK-7HpES213PXBLenVAIqpAVWOzRbyc3qYRmgGlPanlsSBG';

  $msg = ["content" => "

  Goooood morning @everyone!! It's day threeeeee!! 
  
  Today is Hip-Hop January the 3rd, 2024 and we're listening to **The Forever Story by JID**!  :cat_Bob: 
  
  Here are the links for today's listen:"
"embeds" => 
[
    [
        "title" => "Spotify",
        "type" => "rich",
        "url" => "https://open.spotify.com/album/4rJDCELWL0fjdmN9Gn4f4g?si=Ri46GV9CQuuQonx3fJnABw",
    ], 
    [
        "title" => "Youtube",
        "type" => "rich",
        "url" => "https://www.youtube.com/watch?v=ovQkVCCZ4VA",
    ],
    [
        "title" => "Genius Lyrics",
        "type" => "rich",
        "url" => "https://genius.com/albums/Jid/The-forever-story",
    ],
    [
        "title" => "*Off  Deez (ft J Cole)*",
        "type" => "rich",
        "url" => "https://open.spotify.com/track/3JAeYOjyJodI4PRs44lx2l?si=73ee31462bd24d8a",
    ], 
    [
        "title" => "*JID: NPR Tiny Desk Concert*",
        "type" => "rich",
        "url" => "https://www.youtube.com/watch?v=gsaZRcL-OTQ&list=PL1B627337ED6F55F0&index=144",
    ]


],
];


  $headers = array('Content-Type: application/json'); 

  $ch = curl_init();
  curl_setopt( $ch,CURLOPT_URL, $webhook_url );
  curl_setopt( $ch,CURLOPT_POST, true );
  curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
  curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $msg ) );
  $response = curl_exec( $ch );
  curl_close( $ch );

  echo $response;
?>