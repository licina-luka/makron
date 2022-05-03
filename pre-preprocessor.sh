#!/bin/bash

rm -r dist/
mkdir -p dist/ tmp/

transiler='./autoyay.php src/{} && yay tmp/{} | install -D /dev/stdin dist/{}'

find src/ -name '*.php' \
  | sed 's/src\///g' \
  | xargs -I {} \
    -n 1 \
    bash -c "$transiler"

rm -r tmp/