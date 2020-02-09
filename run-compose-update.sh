#!/bin/bash

echo Update dependencies
docker run --rm --interactive --tty -v $PWD:/app composer update
