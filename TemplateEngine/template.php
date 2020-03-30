<?php

class template
{
    // Tags array
    private $tags = [];

    // Template file
    private $template;

    public function __construct($templateFile)
    {
        $this->template = $this->getFile($templateFile);

        // If the template file is not accessible
        if(!$this->template) {
            return "Error! Can't load the template file $templateFile";
        }

    }

    // Render the build template
    public function render()
    {
        $this->replaceTags();

        return $this->template;
    }

    // Set the {tag} with value
    public function set($tag, $value)
    {
        $this->tags[$tag] = $value;
    }

    // Get the template file
    public function getFile($file)
    {
        if(file_exists($file))
        {
            $file = file_get_contents($file);
            return $file;
        }
        else
        {
            return false;
        }
    }

    // Replaces all {tags} with corresponding values from $tags array
    private function replaceTags()
    {
        foreach ($this->tags as $tag => $value) {
            $this->template = str_replace('{'.$tag.'}', $value, $this->template);
        }

        return true;
    }
}