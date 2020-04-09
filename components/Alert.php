<?php namespace Albrightlabs\Alert\Components;

use Cms\Classes\ComponentBase;

class Alert extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Alert',
            'description' => 'Adds alert support to layout.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('/plugins/albrightlabs/alert/assets/css/styles.css');
    }

    /**
     * Return an alert to the front-end for alert popup
     * INPUT: type (success, info, warning, danger), message
     */
    public function onFlashAlert()
    {
        // retrieve data
        $data = post();

        // create alert
        if(isset($data['type'])){
            $alert['type'] = $data['type'];
        }
        if(isset($data['message'])){
            $alert['message'] = $data['message'];
        }
        else {
            $alert['message'] = 'No message here!';
        }

        $this->page['alert'] = $alert;

        return [
            '#alert-popup' => $this->renderPartial('alert.htm'),
        ];
    }

    public static function flashAlert($type = null, $message = null)
    {
        $alert['type'] = $type;
        $alert['message'] = $message;

        return $alert;
    }
}
