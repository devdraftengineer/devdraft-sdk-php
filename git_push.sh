#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"

git_user_id="devraftengineer"
git_repo_id="devdraft-sdk-php"
release_note="Initial release: DevDraft PHP SDK"
git_repo_base_url="https://github.com"

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined
    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git credential in your environment."
        git remote add origin ${git_repo_base_url}/${git_user_id}/${git_repo_id}.git
    else
        git_repo_base_url=${git_repo_base_url#*//}
        git_repo_base_url=${git_repo_base_url%%.*}
        git remote add origin https://${git_user_id}:${GIT_TOKEN}@${git_repo_base_url}/${git_user_id}/${git_repo_id}.git
    fi
fi

# Create and switch to main branch
git branch -M main

# Pull from main branch
git pull origin main

# Pushes the changes in the local repository up to the remote repository
echo "Git pushing to ${git_repo_base_url}/${git_user_id}/${git_repo_id}.git"
git push -u origin main 2>&1 | grep -v 'To https'

