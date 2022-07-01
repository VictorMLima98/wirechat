# Project Details and Requirements
- PHP 8.1
- Laravel 9.19
- Free tier Pusher
- Redis

This project is a simple chat written in TALL Stack (TailwindCSS, AlpineJS, Laravel & Livewire). It uses Pusher as broadcast driver and Redis to handle Laravel Horizon queues.

# Set up
- Install composer and npm dependencies
- Configure your .env with your DB and Pusher credentials (Queue/Session/Broadcast is preconfigured)
- Run migrations and seeders
- Run horizon
- Run npm run dev
- I think it should get the job done

# How to Use
Just create some Users (factories or editing the seeders, sign up is not implemented yet). Then, log with them in separate browsers and enjoy the chat.
You can use https://ngrok.com/ to serve your application to your friends and test with them!
