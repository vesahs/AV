<?php

class Router {

    protected $routes = [];

    public function add($method, $url, $controller){
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($url, $controller){
        return $this->add('GET', $url, $controller);
    }

    public function post($url, $controller){
        return $this->add('POST', $url, $controller);
    }


    public function put($url, $controller){
        return $this->add('PUT', $url, $controller);
    }

    public function patch($url, $controller){
        return $this->add('PATCH', $url, $controller);

    }

    public function delete($url, $controller){
        return $this->add('DELETE', $url, $controller);
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this; 
    }
    
    public function route($url, $method) {
        foreach ($this->routes as $route) {
            if($route['url'] === $url && $route['method'] === strtoupper($method)){
                if($route['middleware'] === 'basic') {
                    if($_SESSION['user'] ?? false) {
                        header('location: /');
                        exit();
                    }
                }

                if($route['middleware'] === 'admin') {
                    if($_SESSION['user']['role'] !== 'admin') {
                        header('location: /');
                        exit();
                    }
                }
                return require($route['controller']);
            }
        }

        abort();
    }

}