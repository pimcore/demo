<?php


namespace AppBundle\Twig\Extension;


use Pimcore\Translation\Translator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigTest;

class GeneralFilterExtension extends AbstractExtension
{

    /**
     * @var Translator
     */
    protected $translator;

    /**
     * GeneralFilterExtension constructor.
     * @param Translator $translator
     */
    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('app_general_filter_translate', [$this, 'translateValues']),
            new TwigFunction('app_general_filter_sort', [$this, 'sort']),
            new TwigFunction('app_general_filter_sort_objects', [$this, 'sortObjects'])
        ];
    }

    public function getTests()
    {
        return [
            new TwigTest('instanceof', [$this, 'instanceof']),
        ];
    }

    public function translateValues($values) {

        foreach($values as &$modifyingValue) {
            $modifyingValue['translated'] = $this->translator->trans(mb_strtolower('optionvalue.' . $modifyingValue['value']));
        }

        return $values;
    }

    /**
     * @param array $values
     * @param string|null $fieldname
     * @return array
     */
    public function sort(array $values, string $fieldname = null): array {
        @usort($values, function($left, $right) use ($fieldname) {

            $leftString = $left;
            $rightString = $right;

            if($fieldname) {
                $methodName = 'get' . ucfirst($fieldname);
                if(is_array($leftString)) {
                    $leftString = $leftString[$fieldname];
                } else if(method_exists($leftString, $methodName)) {
                    $leftString = $leftString->$methodName();
                }
                if(is_array($rightString)) {
                    $rightString = $rightString[$fieldname];
                } else if(method_exists($rightString, $methodName)) {
                    $rightString = $rightString->$methodName();
                }
            }

            return strcmp($leftString, $rightString);
        });

        return $values;
    }

    /**
     * @param array $values
     * @param string $fieldname
     * @param array $objects
     * @return array
     */
    public function sortObjects(array $values, string $fieldname, array $objects): array {
        @usort($values, function($left, $right) use ($fieldname, $objects) {

            $leftString = '';
            $rightString = '';

            $methodName = 'get' . ucfirst($fieldname);

            $object = $objects[$left['value']];
            if($object && method_exists($object, $methodName)) {
                $leftString = $object->$methodName();
            }

            $object = $objects[$right['value']];
            if($object && method_exists($object, $methodName)) {
                $rightString = $object->$methodName();
            }

            return strcmp($leftString, $rightString);
        });

        return $values;
    }

    public function instanceof($object, $className) {
        return is_a($object, $className);
    }

}