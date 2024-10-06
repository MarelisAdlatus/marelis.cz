#!/bin/bash

# name of the SVG file
SVG_FILE="icon.svg"

# check if the SVG file exists
if [ ! -f "$SVG_FILE" ]; then
    echo "SVG file $SVG_FILE not found!"
    exit 1
fi

# check if rsvg-convert is installed
if ! command -v rsvg-convert &> /dev/null; then
    echo "rsvg-convert could not be found. Please install it."
    exit 1
fi

# check if convert (from ImageMagick) is installed
if ! command -v convert &> /dev/null; then
    echo "convert (ImageMagick) could not be found. Please install it."
    exit 1
fi

# convert SVG to PNG in different sizes
for size in 16 32 48 64 128 256; do
    rsvg-convert -o "favicon-${size}.png" -w $size -h $size "$SVG_FILE"
done

# convert PNG to ICO
convert favicon-{16,32,48,64,128,256}.png public/favicon.ico

# remove PNG files
rm favicon-{16,32,48,64,128,256}.png

echo "Favicon was created successfully!"
