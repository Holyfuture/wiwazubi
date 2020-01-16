<?php


namespace app\core\Route;


class Route
{
    private $route = null;

    /*
     * There some Keys that must provide
     * the Route Array. This is necessary
     * to provide a fully Route Object
     */
    private $routeList = [
        'url', 'controller'
    ];

    /*
     * There some Keys that doesn't have
     * core affect on the Routing but might
     * be helpful. A Route Object can have
     * multiple options for his Routing that
     * are defined by the programmer
     */
    private $optionalRouteList = [
        'test'
    ];

    public function __construct(array $route)
    {
        if (!$this->isRoutable($route)) {
            return self::setRouteUrl();
        }


    }


    private function setRouteUrl()
    {

    }

    private function setRouteController()
    {

    }

    public function getRouteUrl()
    {
        return $this->route['url'];
    }

    public function getRouteController()
    {
        return $this->route['controller'];
    }

    /**
     * Checks validation of Routing Array
     *
     * @param array $route
     * @return bool
     */
    private function isRoutable(array $route): bool
    {
        if (!self::checkArrayKeys($route)) {
            return false;
        }

        if (!self::isRoutingStringValidate($route)) {
            return false;
        }

        if ($route['controller'] != false) {
            if (!self::isControllerCallable()) {
                return false;
            }
        }

        if(!self::isViewCallable()){
            return false;
        }

        return true;
    }

    /**
     * Checks Routing Value's after String Validation
     *
     * @param array $route
     * @return bool
     */
    private function isRoutingStringValidate(array $route): bool
    {

        return true;
    }

    /**
     * Validate required Keys and optional Keys
     * of given Route Array
     *
     * @param array $route
     * @return bool
     */
    private function checkArrayKeys(array $route): bool
    {
        foreach ($this->routeList as $index => $value) {
            if (!array_key_exists($index, $route)) {
                return false;
            }
        }

        return true;
    }


    private function isControllerCallable(): bool
    {
        // TODO
    }

    private function isViewCallable(): bool
    {

    }
}