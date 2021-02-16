#!/bin/sh

mkdir ./public/images
for var in 1 2 3 4 5 6 7 8 9
do
    curl -o ./public/images/${var}.jpg https://raw.githubusercontent.com/Techpit-Contents/laravel-fashion-ec-app/master/public/images/${var}.jpg
done
curl -o ./public/images/top.jpg https://raw.githubusercontent.com/Techpit-Contents/laravel-fashion-ec-app/master/public/images/top.jpg
curl -o ./public/images/top2.jpg https://raw.githubusercontent.com/Techpit-Contents/laravel-fashion-ec-app/master/public/images/top2.jpg
