# **Library API Documentation**
This Library API Documentation allows users to manage their library collection efficiently. Built with PHP, the Slim Framework, and Composer, it provides RESTful endpoints for user registration, authentication, and CRUD (Create, Read, Update, Delete) operations on authors, books, and author-book relationships. The system leverages JSON Web Tokens (JWT) to ensure secure access and interactions within the application.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
  - [User Endpoints](#user-endpoints)
  - [Book Endpoints](#book-endpoints)
  - [Author Endpoints](#author-endpoints)
- [Error Handling](#error-handling)
- [Contributing](#contributing)
- [License](#license)

## Features

- **User Authentication**: Register and authenticate users using JWT.
- **CRUD Operations**: Create, read, update, and delete authors, books, and relationships.
- **Secure Access**: JWT-based authorization for secure interactions.

## Tech Stack

- **Backend**: PHP, Slim Framework
- **Database**: MySQL
- **Authentication**: JSON Web Tokens (JWT)
- **Dependencies**: Composer