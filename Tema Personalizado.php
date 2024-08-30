// theme.scss
$primary-color: #3498db;
$secondary-color: #2ecc71;

body {
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;
}

a {
    color: $primary-color;
    text-decoration: none;

    &:hover {
        color: $secondary-color;
    }
}

.header {
    background: $primary-color;
    padding: 10px;
    color: white;
}