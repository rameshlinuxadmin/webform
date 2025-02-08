
# Web Form and Voting App Project

This repository contains a web form application and a voting app, both designed to be deployed using Docker and Kubernetes. The project includes configurations for containerized deployment, as well as Kubernetes manifests for orchestration.

## Repository Structure

```plaintext
rameshlinuxadmin-webform/
├── README.md                     # This file
├── Docker/                        # Docker-related files
│   ├── docker-compose.yml        # Docker Compose file for local deployment
│   ├── html/                     # HTML and PHP files for the web form
│   │   ├── index.html            # Main HTML file for the web form
│   │   └── php/                  # PHP scripts for server-side processing
│   │       └── index.php         # Example PHP file
│   └── sql/                      # SQL initialization scripts
│       └── init.sql              # SQL script to initialize the database
├── Kubernetes/                   # Kubernetes manifests for deployment
│   ├── backend-deployment.yml    # Backend deployment configuration
│   ├── backend-pod.yml           # Backend pod configuration
│   ├── backend-service.yml       # Backend service configuration
│   ├── database-deployment.yml   # Database deployment configuration
│   ├── database-pod.yml          # Database pod configuration
│   ├── database-service.yml      # Database service configuration
│   ├── frontend-deployment.yml   # Frontend deployment configuration
│   ├── frontend-pod.yml          # Frontend pod configuration
│   ├── frontend-service.yml      # Frontend service configuration
│   ├── html/                     # HTML and PHP files for the web form
│   │   ├── index.html            # Main HTML file for the web form
│   │   └── php/                  # PHP scripts for server-side processing
│   │       └── index.php         # Example PHP file
│   └── sql/                      # SQL initialization scripts
│       └── init.sql              # SQL script to initialize the database
└── voting_app/                   # Voting application configurations
    ├── Pods_services/            # Kubernetes Pod and Service configurations
    │   ├── postgres-pod.yml      # PostgreSQL pod configuration
    │   ├── postgres-service.yml  # PostgreSQL service configuration
    │   ├── redis-pod.yml         # Redis pod configuration
    │   ├── redis-service.yml     # Redis service configuration
    │   ├── result-app-pod.yml    # Result app pod configuration
    │   ├── result-app-service.yml# Result app service configuration
    │   ├── start.sh              # Script to start the voting app
    │   ├── stop.sh               # Script to stop the voting app
    │   ├── voting-app-pod.yml    # Voting app pod configuration
    │   ├── voting-app-service.yml# Voting app service configuration
    │   └── worker-app-pod.yml    # Worker app pod configuration
    └── deploy_services/          # Kubernetes Deployment and Service configurations
        ├── postgres-deploy.yml   # PostgreSQL deployment configuration
        ├── postgres-service.yml  # PostgreSQL service configuration
        ├── redis-deploy.yml      # Redis deployment configuration
        ├── redis-service.yml     # Redis service configuration
        ├── result-app-deploy.yml # Result app deployment configuration
        ├── result-app-service.yml# Result app service configuration
        ├── start.sh              # Script to start the voting app
        ├── stop.sh               # Script to stop the voting app
        ├── voting-app-deploy.yml # Voting app deployment configuration
        ├── voting-app-service.yml# Voting app service configuration
        └── worker-app-deploy.yml # Worker app deployment configuration
```

## Features

- **Web Form**: A simple web form built with HTML and PHP, ready for deployment using Docker or Kubernetes.
- **Voting App**: A distributed voting application with Redis, PostgreSQL, and worker services, configured for Kubernetes deployment.
- **Containerized Deployment**: Includes Docker Compose and Kubernetes manifests for easy deployment.
- **Scalable Architecture**: Designed to scale using Kubernetes deployments and services.

## Getting Started

### Prerequisites

- Docker and Docker Compose installed (for local deployment).
- Kubernetes cluster (for Kubernetes deployment).
- `kubectl` configured to interact with your Kubernetes cluster.

### Steps to Run

#### 1. Clone the Repository

```bash
git clone https://github.com/rameshlinuxadmin/webform.git
cd webform
```

#### 2. Deploy with Docker

Navigate to the Docker directory:

```bash
cd Docker
```

Start the application using Docker Compose:

```bash
docker-compose up -d
```

#### 3. Deploy with Kubernetes

Navigate to the Kubernetes directory:

```bash
cd Kubernetes
```

Apply the Kubernetes manifests:

```bash
kubectl apply -f .
```

#### 4. Deploy the Voting App

Navigate to the voting_app directory:

```bash
cd voting_app
```

Use the `start.sh` script to deploy the voting app:

```bash
./start.sh
```

## Download the Repository

To download this repository as a ZIP file:

1. Click the **Code** button on the GitHub repository page.
2. Select **Download ZIP**.
3. Extract the ZIP file to use the project locally.

Alternatively, use the `wget` command:

```bash
wget https://github.com/rameshlinuxadmin/webform/archive/refs/heads/main.zip -O webform.zip
```

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes.
4. Push your branch and submit a pull request.

## Contact

For any questions or feedback, please contact the repository owner:

- **Name**: Ramesh Aravind  
- **GitHub**: [rameshlinuxadmin](https://github.com/rameshlinuxadmin)
- **Mail**: rameshannaunivceg@gmail.com
