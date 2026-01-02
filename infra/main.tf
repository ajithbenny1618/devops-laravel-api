resource "docker_network" "app_network" {
  name = "terraform_app_network"
}

resource "docker_container" "nginx" {
  name  = "nginx_tf"
  image = "nginx:alpine"

    ports {
    internal = 80
    external = 8081
    }


  networks_advanced {
    name = docker_network.app_network.name
  }
}
