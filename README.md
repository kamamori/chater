# CHATER! /mini-chat

 Chater! is a real time chat application powered by Symfony3  and Ratchet using WebSockets.
 
# Requirements

  Ratchet Socketome package : Ratchet is a loosely coupled PHP library
providing developers with tools to create real time, bi-directional
applications between clients and servers over WebSockets.

# Installation Instructions

    1. Verify that your hosting environment has sql enabled for symfony.
    2. Composer Install
    3. Start: 'bin/console server:run'
    4. Start: 'bin/console app:socket:listen' (Handle the socket with Javascript)
   
# Note :
   Number of messages to load per page is configured to be 10 (in parameters).
