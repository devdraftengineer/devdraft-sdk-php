#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"

# Set repository details
GIT_USER_ID="devraftengineer"
GIT_REPO_ID="devdraft-sdk-php"
RELEASE_NOTE="Initial release: DevDraft PHP SDK"
GIT_REPO_BASE_URL="https://github.com"

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$RELEASE_NOTE"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined
    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git credential in your environment."
        git remote add origin "${GIT_REPO_BASE_URL}/${GIT_USER_ID}/${GIT_REPO_ID}.git"
    else
        git_repo_base_url=${GIT_REPO_BASE_URL#*//}
        git_repo_base_url=${git_repo_base_url%%.*}
        git remote add origin "https://${GIT_USER_ID}:${GIT_TOKEN}@${git_repo_base_url}/${GIT_USER_ID}/${GIT_REPO_ID}.git"
    fi
fi

# Create and switch to main branch
git branch -M main

# Pull from main branch
git pull origin main || true

# Pushes the changes in the local repository up to the remote repository
echo "Git pushing to ${GIT_REPO_BASE_URL}/${GIT_USER_ID}/${GIT_REPO_ID}.git"
git push -u origin main 2>&1 | grep -v 'To https'

