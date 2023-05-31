<?php
namespace ECOF\Handelers;

trait Style
{

    /**
     * style for input type text | email | password
     *
     * @var type
     */
    private $inputStyle = "w3-input w3-border w3-round w3-margin-top";

    /**
     * background color for all inputs
     *
     * @var string
     */
    public string $inputBgColor = 'white';

    /**
     * style for input type select
     *
     * @var type
     */
    private $dropdownStyle = 'w3-margin-top w3-select w3-round w3-border';

    /**
     * Holds the background color of the form
     *
     * @var string
     */
    public string $formBgColor = '';

    /**
     * Whether the form has border or not
     *
     * @var bool
     */
    public bool $formBorder = false;

    /**
     * Whether the corner of the form are rounded or not
     *
     * @var bool
     */
    public bool $formRound = false;

    /**
     * Whether the form has padding or not
     *
     * @var bool
     */
    public bool $formPadding = true;

    /**
     * Whether the form has margin or not
     *
     * @var bool
     */
    public bool $formMargin = false;

}
