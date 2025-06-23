<?php
// core/Controller.php
class Controller {
    /**
     * Load and instantiate a model class
     *
     * @param string $model  Model class name (e.g. "User")
     * @return object        Instance of that model
     * @throws Exception     If the model file doesn't exist
     */
    public function model($model) {
        $modelFile = __DIR__ . '/../app/models/' . $model . '.php';
        if (!file_exists($modelFile)) {
            throw new Exception("Model file '{$model}.php' not found at {$modelFile}");
        }
        require_once $modelFile;
        return new $model();
    }

    /**
     * Alias for backwards compatibility if any controllers call loadModel()
     */
    public function loadModel($model) {
        return $this->model($model);
    }

    /**
     * Load a view, wrapping it in header+footer templates,
     * and extract() the $data array into local variables.
     *
     * @param string $view  Path under app/views, without “.php” (e.g. "home/index")
     * @param array  $data  Associative array of variables to extract for the view
     * @throws Exception    If the view file doesn't exist
     */
    public function view($view, $data = []) {
        $viewFile = __DIR__ . '/../app/views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new Exception("View file '{$view}.php' not found at {$viewFile}");
        }

        // make each $data['foo'] available as $foo in the view
        extract($data, EXTR_SKIP);

        require_once __DIR__ . '/../app/views/templates/header.php';
        require_once $viewFile;
        require_once __DIR__ . '/../app/views/templates/footer.php';
    }
}
