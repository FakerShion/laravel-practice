# Laravel Assessment

## Introduction

You'll be building an application that manages people and email addresses. This
will only be developed locally - you will **not** be required to publish your
code or deploy it to a remote server.

## Setup

Your intelliHR engineer will help guide you through the virtual machine setup.
We're not too concerned about this part in terms of evaluation.

1. Clone this repository
2. Copy `.env.example` file to `.env`
3. Migrate and seed the database using `php artisan migrate:refresh --seed`
4. Navigate to http://laravel-assessment.dev

## Assessment

The codebase in this repository contains:
* A fresh installation of Laravel 5.4
* A Person model, controller, index view, migration, seeder and routes

We don't expect you to finish all of the following steps. Relax, take your time
and work through this properly as you normally would. Don't rush taking
shortcuts you normally wouldn't.

Please git commit after each step. At the end, we'll walk through your git
commit history with you.

Treat all data that is created as though it is production data and that it
cannot be lost.

### 1. Display all People

On the homepage, display a list of all of non-deleted people in the database.
The list should be ordered alphabetically by name.

### 2. Edit People

Create a page that allows updating a person's name.

### 3. Add an Email Address for People

Add support for people to have an email address. Email addresses should be
unique across people.

### 4. Seed Email Addresses

Update the seeder to generate random email addresses. Make it so only 70% of
people have an email address generated.

### 5. Display Email Addresses

For people that have an email address, display it alongside their name
on the homepage. If a person does not have an email address you do not need to
show anything.

### 6. Allow multiple email addresses per person

A person should be able to have multiple email addresses assigned. Update
the database structure to support this. You should make sure that existing pages
continue to function correctly.

### 7. Allow an email address to be marked as primary

People should be able to have a primary email address set which could
hypothetically be used as the address to use when sending a person an email.
There should only be one primary email address per person.

### 8. Enforce uniqueness of email addresses on a per-person basis

Email addresses should be unique per-person but not necessarily unique across
people. This will allow the same email address to be added to multiple people.
