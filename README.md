<h1 align="center">
   Spark Mobility App
</h1>

## 🚀 Quick start guide

1.  **Setup Prerequisites**

    Built using [Laravel](https://laravel.com/). You need to have PHP installed on your local machine to get started and access its CLI.

    1. [Xampp](https://www.apachefriends.org/) (recommended) or [WampServer](https://www.wampserver.com/). PHP 8.1 or higher is required.
    2. [Node](https://nodejs.org/) and NPM are needed to run the site. Recommend the use of [NVM (Node Version Manager)](https://github.com/nvm-sh/nvm) to help manage this if possible.
    3. [Composer](https://getcomposer.org/) - a dependency manager for PHP.

2.  **Environment variables**

    At the root of the repository you will find a `.env.local` file. Inside it would be the environment variables which would be needed to access the database and other dependencies.

3.  **Setup the development environment**

    Pull the repo to your local machine.

    ```shell
    git clone https://github.com/1Console/Sparkmobility-V2.git
    ```

    Navigate into your new site’s directory and execute the following commands.

    ```shell
    composer install
    ```

    \*\*\* Incase you encounter an issue running composer install, launch Xampp and goto Apache > Config > PHP(php.ini) and remove the semicolon `';'` before `extension=zip` on line 962, save the file. Then, run the command again.

    ```shell
    cp .env.example .env
    ```

    ```shell
    php artisan key:generate
    ```

    ```shell
    php artisan migrate
    ```

    ```shell
    npm install
    ```

4.  **Start the site up**

    To start up the site for development, launch Xampp/WampServer and start `Apache` and `MySQL`.

    Then run the following commands simultaneously in two separate terminals on your preferred IDE.

    ```shell
    npm run dev
    ```

    ```shell
    php artisan serve
    ```

    Your site is now running at `http://localhost:5173/` and `http://127.0.0.1:8000/` !

5.  **Open the source code and start editing!**

6.  Make sure to create a feature branch off the Dev branch not the master branch while working [See guide](https://geekflare.com/how-to-create-a-new-git-branch/).

7. When done editing, make sure to do an `npm run format` command to format your code so things are tidy.

## QA process

1. Submit a Pull Request (PR) for code review

    - DO NOT REVIEW YOUR OWN CODE!
    - Seek other developers on the team to review your PR

2. Make sure to address all PR comments and resolve code fixes from feedback.

3. Only approved Pull Requests can be merged into Development branch.

## Deploying code changes (post PR and QA)

1. Squash & merge/push code to `dev` branch.

2. Rebase `dev` into `main`.

## Wiki

The wiki has some helpful information for developers:
#### TailwindCSS
-   TailwindCSS Docs --> [https://tailwindcss.com/docs/utility-first/](https://tailwindcss.com/docs/utility-first/)
-   Learn how the TailwindCSS framework works, prototyping a new idea, or creating a demo to share online. --> [Tailwind Play](https://play.tailwindcss.com/)

#### Git version control 
-   [https://geekflare.com/how-to-create-a-new-git-branch/](https://geekflare.com/how-to-create-a-new-git-branch/)
-   [https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow)
-   [https://www.atlassian.com/git/tutorials/using-branches/git-merge](https://www.atlassian.com/git/tutorials/using-branches/git-merge)
-   [https://www.atlassian.com/git/tutorials/syncing/git-pull](https://www.atlassian.com/git/tutorials/syncing/git-pull)
-   [https://www.atlassian.com/git/tutorials/syncing/git-push](https://www.atlassian.com/git/tutorials/syncing/git-push)

#### SVG Icons
- Refer to the following resources for SVG Icons: `https://flowbite.com/icons/` and `https://heroicons.com/`
