# **Library API Documentation**
This Library API Documentation allows users to manage their library collection efficiently. Built with PHP, the Slim Framework, and Composer, it provides RESTful endpoints for user registration, authentication, and CRUD (Create, Read, Update, Delete) operations on authors, books, and author-book relationships. The system leverages JSON Web Tokens (JWT) to ensure secure access and interactions within the application.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [API Endpoints](#api-endpoints)
  - [User Endpoints](#user-endpoints)
  - [Book Endpoints](#book-endpoints)
  - [Author Endpoints](#author-endpoints)
- [Error Handling](#error-handling)
- [Contributing](#contributing)

## Features

- **User Authentication**: Register and authenticate users using JWT.
- **CRUD Operations**: Create, Display, UPDATE, and DELETE users, authors, books, and book_authors.
- **Secure Access**: JWT-based authorization for secure interactions.

## Tech Stack

- **Backend**: PHP, Slim Framework
- **Database**: SQLyog
- **Authentication**: JSON Web Tokens (JWT)
- **Dependencies**: Composer

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Munarp31/Library.git
   cd Library

## API Endpoints
# User Endpoints
**Register User**
- **Endpoint**: POST /user/register
- **Description**: Register a new user.
- **Request Body**:
```
{
    "username": "exampleUser",
    "password": "securePassword"
}
```
- **Response**:
```
{
    "status": "success",
    "data": null
}
```
# Authenticate User
- **Endpoint**: POST /user/auth
- **Description**: Authenticate a user and generate a JWT token.
- **Request Body**:
```
{
    "username": "exampleUser",
    "password": "securePassword"
}
```
- **Response**:
```
{
    "status": "success",
    "token": "jwt_token"
}
```
# Display Users
- **Endpoint**: GET /user/display
- **Description**: Fetch a list of registered users.
- **Headers**:
```
Authorization: Bearer <jwt_token>
```
- **Response**:
```
{
    "status": "success",
    "data": [
        {
            "userid": 1,
            "username": "exampleUser"
        }
    ]
}
```
# Update User
- **Endpoint**: PUT /user/update
- **Description**: Update a user's information.
- **Request Body**:
```
{
    "token": "jwt_token",
    "userid": 1,
    "username": "newUsername",
    "password": "newPassword"
}
```
- **Response**:
```
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
# Delete User
- **Endpoint**: DELETE /user/delete
- **Description**: Delete a user's account.
- **Request Body**:
```
{
    "token": "jwt_token",
    "userid": 1
}
```
- **Response**:
```
{
    "status": "success",
    "data": null
}
```
# Error Handling
The system uses standard HTTP status codes and JSON error messages to handle errors, ensuring clear communication between the API and its users. Some typical error scenarios include:

- **401 Unauthorized**: Missing or invalid JWT token.
- **400 Bad Request**: Incorrect request payload.
- **403 Forbidden**: Unauthorized action.
- **500 Internal Server Error**: Database connection or query issues.