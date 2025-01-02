echo "# WebForm

A simple web form application running in a Dockerized environment. This repository allows you to collect and process user input via a web form and manage the database using a MySQL GUI.

## Features

- Web form interface for collecting user data.
- MySQL database for storing form submissions.
- Dockerized environment for easy deployment and isolation.
- MySQL GUI (phpMyAdmin) for managing the database.

## Prerequisites

Before proceeding, make sure you have the following tools installed on your machine:

- [Docker](https://www.docker.com/) (including Docker Compose)
- [Git](https://git-scm.com/)

## Installation

### 1. Clone the Repository

Start by cloning the repository to your local machine:

\`\`\`bash
git clone https://github.com/rameshlinuxadmin/webform.git
\`\`\`

### 2. Navigate to the Repository Directory

After cloning the repository, change your directory to the project folder:

\`\`\`bash
cd webform
\`\`\`

### 3. Start the Docker Containers

The project uses Docker Compose to spin up the necessary containers. To start the containers in detached mode:

\`\`\`bash
docker-compose up -d
\`\`\`

This command will download the required Docker images and set up the containers for the web form application and the MySQL database with phpMyAdmin.

### 4. Access the Web Form and MySQL GUI

- **Web Form**: Open your browser and navigate to the following URL to access the HTML form:

  \`\`\`
  http://<ip>:9000
  \`\`\`

  Replace `<ip>` with the IP address of your machine (e.g., `localhost` if running locally or the IP address of the Docker host).

- **MySQL GUI (phpMyAdmin)**: To manage the MySQL database via a GUI, navigate to:

  \`\`\`
  http://<ip>:8080
  \`\`\`

  You can log in to phpMyAdmin using the following credentials:
  - **Username**: `root`
  - **Password**: `example` (or any other password specified in the `docker-compose.yml` file)

### 5. Stopping the Docker Containers

To stop the containers when you're done, run:

\`\`\`bash
docker-compose down
\`\`\`

This will stop and remove the containers but will retain your data unless you explicitly configure it to do otherwise.

## Usage

1. Open the application in your browser at `http://<ip>:9000`.
2. Fill out the form with the required data.
3. Submit the form.
4. The data will be saved into the MySQL database. You can view and manage the data via the phpMyAdmin interface at `http://<ip>:8080`.

## Contributing

We welcome contributions to improve the WebForm project!

### Steps to Contribute:
1. Fork this repository.
2. Create a feature branch (\`git checkout -b feature-name\`).
3. Make changes or improvements.
4. Commit your changes (\`git commit -m 'Add new feature'\`).
5. Push to your fork (\`git push origin feature-name\`).
6. Open a Pull Request to this repository.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details." > README.md
