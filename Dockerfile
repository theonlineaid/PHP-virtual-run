# Use an official PHP image from the Docker Hub with a specific version
FROM php:8.1-apache

# Copy your PHP files to the container's default web directory
COPY . /var/www/html/

# Copy the custom Apache configuration file
COPY apache-virtual-host.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80 (HTTP)
EXPOSE 80
