
# OTT Platform Project

## Overview

This OTT Platform project is a web-based application that allows users to register, log in, and access various movies and series. The platform includes features for user authentication, subscription management, and content viewing.

### Key Features

- **User Authentication**: Secure login and registration for users.
- **Subscription Management**: Users can choose and update their subscription plans.
- **Content Access**: Users can view movies and series based on their selections.

## Project Structure

The project consists of several PHP files that handle different functionalities:

1. **`project.php`**: Handles user login. Verifies credentials and redirects to `i3.php` upon successful login.
2. **`project2.php`**: Manages user registration and updates user details if the email already exists. Redirects to `i4.php` after successful registration.
3. **`project3.php`**: Allows users to select and view movies. Redirects users to the movie link based on their selection.
4. **`project4.php`**: Manages subscription plans for users and updates the subscription details in the database.
5. **`project5.php`**: Allows users to select and view series. Redirects users to the series link based on their selection.

## Explanation of Key Pages

### `i1.php`

- **Description**: This is the homepage or landing page of the platform. It typically displays options for logging in or accessing other parts of the platform.
- **Usage**: Users can navigate to different sections of the application, such as login or registration, from this page.

### `i2.php`

- **Description**: This page is used for user registration. It is accessed when a new user registers on the platform.
- **Usage**: Users enter their email, password, confirm password, and first name to create a new account.

### `i3.php`

- **Description**: This page is displayed after a successful login. It shows options for viewing movies and series.
- **Usage**: Users can select a movie or series to view from this page.

### `i4.php`

- **Description**: This page is used to update or select a subscription plan. It is accessed after the user registers or logs in.
- **Usage**: Users choose their subscription plan and update their preferences.

### `i5.php`

- **Description**: This page is used for viewing series. It shows the selected series based on user input.
- **Usage**: Users can select and view series content from this page.

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/aary-08/OTT-platform.git
