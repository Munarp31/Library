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
  -[Book Endpoints](#book-endpoints)
  -[Book Author Endpoints](#book-author-endpoints)
- [Error Handling](#error-handling)

## Features

- **User Authentication**: Register and authenticate users using JWT.
- **CRUD Operations**: CREATE, DISPLAY, UPDATE, and DELETE users, authors, books, and book_authors.
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

# API Endpoints
## User Endpoints
**Register User**
- **Endpoint**: POST /user/register
- **Description**: Register a new user.
- **Request Body**:
```json
{
    "username": "exampleUser",
    "password": "securePassword"
}
```
- **Response**:
```json
{
    "status": "success",
    "data": null
}
```
**Authenticate User**
- **Endpoint**: POST /user/auth
- **Description**: Authenticate a user and generate a JWT token.
- **Request Body**:
```json
{
    "username": "exampleUser",
    "password": "securePassword"
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "jwt_token"
}
```
**Display Users**
- **Endpoint**: GET /user/display
- **Description**: Fetch a list of registered users.
- **Headers**:
```json
"Authorization": "Bearer <jwt_token>"
```
- **Response**:
```json
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
**Update User**
- **Endpoint**: PUT /user/update
- **Description**: Update a user's information.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "userid": 1,
    "username": "newUsername",
    "password": "newPassword"
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Delete User**
- **Endpoint**: DELETE /user/delete
- **Description**: Delete a user's account.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "userid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "data": null
}
```

## Author Endpoints
**Register Author**
- **Endpoint**: POST /author/register
- **Description**: Register a new author.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "name": "Author Name"
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Display Authors**
- **Endpoint**: GET /author/display
- **Description**: Fetch a list of authors.
- **Headers**:
```json
"Authorization": "Bearer <jwt_token>"
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": [
        {
            "authorid": 1,
            "name": "Author Name"
        }
    ]
}
```
**Update Author**
- **Endpoint**: PUT /author/update
- **Description**: Update an author's information.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "authorid": 1,
    "name": "Updated Author Name"
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Delete Author**
- **Endpoint**: DELETE /author/delete
- **Description**: Delete an author from the system.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "authorid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "data": null
}
```

## Book Endpoints
**Register Book**
- **Endpoint**: POST /book/register
- **Description**: Register a new book in the library.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "title": "Book Title",
    "authorid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Display Books**
- **Endpoint**: GET /book/display
- **Description**: Fetch a list of books in the library.
- **Headers**:
```json
"Authorization": "Bearer <jwt_token>"
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": [
        {
            "bookid": 1,
            "title": "Book Title",
            "authorid": 1
        }
    ]
}
```
**Update Book**
- **Endpoint**: PUT /book/update
- **Description**: Update an existing book's information.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "bookid": 1,
    "title": "Updated Book Title",
    "authorid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Delete Book**
- **Endpoint**: DELETE /book/delete
- **Description**: Delete a book from the library.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "bookid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
## Book Author Endpoints
**Register Book-Author**
- **Endpoint**: POST /book_author/register
- **Description**: Register a relationship between a book and an author.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "title": "book_title",
    "bookid": 1,
    "authorid": 1
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Display Book-Author**
- **Endpoint**: GET /book_author/display
- **Description**: Fetch a list of all book-author relationships.
- **Headers**:
```json
"Authorization": "Bearer <jwt_token>"
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": [
        {
            "collectionid": 1,
            "bookid": 1,
            "authorid": 1
        }
    ]
}
```
**Update Book-Author**
- **Endpoint**: PUT /book_author/update
- **Description**: Update a book-author relationship based on the collection ID.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "bookid": 1,
    "title": "book_title",
    "authorid": 1,
    "collectionid":1
}
```
- **Response**:
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
**Delete Book-Author**
- **Endpoint**: DELETE /book_author/delete
- **Description**: Delete a book-author relationship based on the collection ID.
- **Request Body**:
```json
{
    "token": "jwt_token",
    "bookid": 1,
    "collectionid": 1
}
```
- **Response**:   
```json
{
    "status": "success",
    "token": "new_jwt_token",
    "data": null
}
```
Here are the error handling scenarios based on the previous `book_author` endpoints:

## Error Handling

The system uses standard HTTP status codes and JSON error messages to handle errors, ensuring clear communication between the API and its users. Some typical error scenarios include:

**401 Unauthorized**
- **Scenario**: Missing or invalid JWT token.
- **Example**:
  - When a request does not include a valid token in the authorization header or the token is expired/invalid.
  
**Response**:
```json
{
    "status": "fail",
    "data": {
        "title": "Invalid or expired token"
    }
}
```
- **HTTP Status**: 401 Unauthorized

**400 Bad Request**
- **Scenario**: Incorrect request payload.
- **Example**:
  - Missing required fields such as `token`, `bookid`, or `authorid` in the request body.
  
**Response**:
```json
{
    "status": "fail",
    "data": {
        "title": "Token missing in payload"
    }
}
```
- **HTTP Status**: 400 Bad Request

```json
{
    "status": "fail",
    "data": {
        "title": "Book ID or Author ID missing in payload"
    }
}
```
- **HTTP Status**: 400 Bad Request

**403 Forbidden**
- **Scenario**: Unauthorized action (e.g., user trying to perform an action without permission).
- **Example**:
  - When a user tries to access or modify data they don't have permission for.

**Response**:
```json
{
    "status": "fail",
    "data": {
        "title": "Unauthorized action"
    }
}
```
- **HTTP Status**: 403 Forbidden

**500 Internal Server Error**
- **Scenario**: Database connection or query issues.
- **Example**:
  - When there is a problem connecting to the database or executing the SQL query.

**Response**:
```json
{
    "status": "fail",
    "data": {
        "title": "Database connection error"
    }
}
```
- **HTTP Status**: 500 Internal Server Error

```json
{
    "status": "fail",
    "data": {
        "title": "SQL Query error"
    }
}
```
- **HTTP Status**: 500 Internal Server Error