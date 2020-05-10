<?php

namespace Muhsenmaqsudi\Componel\View\Components;

use Illuminate\View\Component;
use Muhsenmaqsudi\Componel\Traits\MakeResponsiveClasses;

class Col extends Component
{
    use MakeResponsiveClasses;

    public $colsWidth;
    public $responsiveClasses;
    public $flex;
    public $order;
    public $self;

    /**
     * Create a new component instance.
     *
     * @param $cols
     * @param string $flex
     * @param string $order
     * @param null $self
     * @param $sm
     * @param $md
     * @param $lg
     * @param $xl
     */
    public function __construct($cols,
                                $flex = 'none',
                                $order = null,
                                $self = null,
                                $sm = null,
                                $md = null,
                                $lg = null,
                                $xl = null)
    {
        $this->colsWidth = is_numeric($cols) ? "w-{$cols}/12" : "w-{$cols}";
        $this->flex = "flex-{$flex}";
        $this->order = $order ? "order-{$order}" : null;
        $this->self = $self ? "self-{$self}" : null;
        $this->responsiveClasses = $this->getResponsiveClasses('w-', '/12', [
            'sm' => $sm, 'md' => $md, 'lg' => $lg, 'xl' => $xl
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('componel::components.col');
    }
}
