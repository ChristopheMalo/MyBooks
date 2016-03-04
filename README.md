# MyBooks

A Silex application to present a list of books

## Presentation
MyBooks is a minimalist Web application type management books. It is built by successive iterations. Each branch of this repository equal to the result obtained at the end of an iteration.

## The main characteristics
The main characteristics of the site are:

- Viewing the list of books
- Viewing details of a book
- Using the MVC design pattern
- Integration of micro-framework Silex
- Object modeling domain and data access
- Use of namespaces and automatic loading of classes with Composer
- Dependency management with Composer
- Integration of Twig template engine to facilitate writing views
- Integration of Bootstrap framework

## Iteration 1

The purpose: display the list of all books

- Create all the folders (for files) respecting the MVC design pattern
- Create Composer file to manage project dependencies
- Install dependencies with composer
- Modeling the class diagram of the project with UML
- Model diagram of the DB
- Code the SQL DB
- Install the DB
- Install twitter bootstrap 3.3.6
- Code the config files
- Code the config of Silex app
- Code the homepage route
- Code the frontal controller
- Code htaccess file
- Code the class Book
- Code the class DAO
- Code the class BookDAO
- Code CSS file
- Code layout and index view files

## Iteration 2

The purpose: display the details of a book in a single page

- Code the class Author
- Code the class AuthorDAO
- Register the dao.author service in app file
- Update the class Book to retrieve Author
- Add method find() a book in BookDAO
- Update routes file to display a detailed book
- Code the view of a detailed book
- Code the link to a detailed book in the view of index

## Copyright
**An original idea of Baptiste Pesquet for :** [a work practice of Openclassrooms](https://openclassrooms.com/courses/evoluez-vers-une-architecture-php-professionnelle) - **Adapted and directed :** Christophe Malo