# **Library API Documentation**
This Library API Documentation allows users to manage their library collection efficiently. Built with PHP, the Slim Framework, and Composer, it provides RESTful endpoints for user registration, authentication, and CRUD (Create, Read, Update, Delete) operations on authors, books, and author-book relationships. The system leverages JSON Web Tokens (JWT) to ensure secure access and interactions within the application.

## Table of Contents

1. [Library System API Documentation](#library-system-api-documentation)
2. [Base URL](#base-url)
3. [Endpoints](#endpoints)
   - [POST /user/auth](#post-userauth)
   - [GET /user/display](#get-userdisplay)
   - [PUT /user/update](#put-userupdate)
   - [DELETE /user/delete](#delete-userdelete)
4. [Authentication and Token Management](#authentication-and-token-management)
5. [Error Codes](#error-codes)
6. [Example Requests and Responses](#example-requests-and-responses)
