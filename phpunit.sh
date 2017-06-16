#!/usr/bin/env bash
set -e

php --version

echo "Starting tests" >&1
./vendor/bin/phpcs --standard=psr2 --ignore=vendor -n .
./vendor/bin/phpstan analyse --level=4 Client Config Exception Extractor Filesystem Pagination Parser Tests || true

./vendor/bin/phpunit --coverage-clover build/logs/clover.xml
./vendor/bin/test-reporter

echo "Tests Finished" >&1