#!/bin/bash
cd `dirname $0`

git pull
php generateMarkdown/main.php

git status | grep modified && \
  git add source/includes/* && \
  git commit -v -m "[Bot] Update at $(date +'%Y-%m-%d %H:%M:%S')" && \
  git push origin main
