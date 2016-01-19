<?php

namespace File;

class XLSX  {

    /**
     * defaults for the header row.
     * @var array
     */
    private $headerDefaults = array(
        'bold' => true,
        'underline' => true,
        'alignment' => array(
            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER
        ),
        'height' => 20,
        'italic' => false,
        //default the borders to no-border.
        'borders' => array(
            'left' => array(
                'style' => \PHPExcel_Style_Border::BORDER_NONE,
                'color' => array(
                    'rgb' => 'FFF'
                )
            ),
            'top' => array(
                'style' => \PHPExcel_Style_Border::BORDER_NONE,
                'color' => array(
                    'rgb' => 'FFF'
                )
            ),
            'right' => array(
                'style' => \PHPExcel_Style_Border::BORDER_NONE,
                'color' => array(
                    'rgb' => 'FFF'
                )
            ),
            'bottom' => array(
                'style' => \PHPExcel_Style_Border::BORDER_NONE,
                'color' => array(
                    'rgb' => 'FFF'
                )
            )
        )
    );

    /**
     * defaults for the rest of the spreadsheet.
     * @var array
     */
    private $defaults = array(
        //Whether to enable hyperlinks from valid URLs.
        'urls' => true,
        //portions of the worksheet to freeze, head is header row, left is the first column to the left.
        'freeze' => array(
            'head' => false,
            'left' => false
        ),
        //cell conditions based on the value.
        'conditions' => array(
            //numeric values.
            'numeric' => array(
                //if the value is zero.
                'isZero' => array(
                    'enabled' => false,
                    //the default style for this condition.
                    //black font with red background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '000000'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                            'color' => array(
                                'argb' => 'FF8D8D'
                            )
                        )
                    )
                ),
                //if a value is greater than or equal
                'greaterThanOrEqual' => array(
                    'value' => 20,
                    'enabled' => false,
                    //default style for this condition,
                    //black font with a green background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '000'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                            'color' => array(
                                'argb' => '66E066'
                            )
                        )
                    )
                ),
                //if a value is less than.
                'lessThan' => array(
                    'value' => 0,
                    'enabled' => false,
                    //default style for this condition
                    //black font with orange background
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '000'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                            'color' => array(
                                'argb' => 'FFCC66'
                            )
                        )
                    )
                ),
                //if the value is greater than.
                'greaterThan' => array(
                    'value' => 0,
                    'enabled' => false,
                    //default style for this condition,
                    //green text with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '66E066'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                ),
                'lessThanOrEqual' => array(
                    'value' => 0,
                    'enabled' => false,
                    //default style for this condition,
                    //green text with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '66E066'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                )
            ),
            //string/text values.
            'text' => array(
                //contains a certain string/text
                'contains' => array(
                    'value' => '',
                    'enabled' => false,
                    //default style for this condition,
                    //green text with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '66E066'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                ),
                //doesnt contain a certain string/text
                'notContains' => array(
                    'value' => '',
                    'enabled' => false,
                    //default style for this condition
                    //red font with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => 'FF8D8D'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                ),
                'beginsWith' => array(
                   'value' => '',
                    'enabled' => false,
                    //default style for this condition,
                    //green text with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '66E066'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                ),
                'endsWith' => array(
                    'value' => '',
                    'enabled' => false,
                    //default style for this condition,
                    //green text with white background.
                    'style' => array(
                        'font' => array(
                            'color' => array(
                                'rgb' => '66E066'
                            ),
                            'bold' => true
                        ),
                        'fill' => array(
                            'type' => \PHPExcel_Style_Fill::FILL_NONE,
                        )
                    )
                )
            )
        )
    );

    /**
     * generates a spreadsheet.
     * @param $contents array the contents to put in the spreadsheet.
     * @param array $headerOptions the options to apply to the header row.
     * @param array $options the options to apply to all other cells.
     * @param bool $returnObj whether to return the spreadsheet object or send it to the client.
     * @return \PHPExcel if returnObj is true, the spreadsheet object will be returned.
     */
    public function generateSpreadsheet($contents, $name, $headerOptions = array(), $options = array(), $returnObj = false) {

        if(!is_array($contents) || count($contents) == 0) {
            return;
        }

        $headerOptions = (is_array($headerOptions))
                       ? array_replace_recursive($this->headerDefaults, $headerOptions)
                       : $this->headerDefaults;

        $options = (is_array($options))
                 ? array_replace_recursive($this->defaults, $options)
                 : $this->defaults;

        $spreadsheet = new \PHPExcel();

        //set the properties of the spreadsheet.
        $spreadsheet->getProperties()
            ->setCreator('Reports')
            ->setLastModifiedBy('Reports')
            ->setTitle($name)
            ->setDescription($name)
            ->setKeywords("DSGI Prices SAP Brokerbin Ebay Alibaba Knowhow Distribution")
            ->setCategory('Pricing');

        //set the settings on the worksheet.
        $spreadsheet->getActiveSheet()
            ->setTitle('DSGI Price Results');

        //set the contents, we assume that the first entry in the contents in the header row.
        $header = $contents[0];
        unset($contents[0]);
        $contents = array_values($contents);

        for($col = 0; $col < count($header); $col++) {
            $spreadsheet->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $header[$col]);
            $spreadsheet->getActiveSheet()->getStyleByColumnAndRow($col, 1)
                ->applyFromArray($this->generateHeaderStyle($headerOptions));
            $spreadsheet->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(true);
            $spreadsheet->getActiveSheet()->getRowDimension(1)->setRowHeight($headerOptions['height']);
        }

        for($row = 0; $row < count($contents); $row++) {
            for($col = 0; $col < count($contents[$row]); $col++) {
                $spreadsheet->getActiveSheet()->setCellValueByColumnAndRow($col, $row+2, $contents[$row][$col]);
                if(filter_var($contents[$row][$col], FILTER_VALIDATE_URL)) {
                    if($options['urls']) {
                        $spreadsheet->getActiveSheet()->getCellByColumnAndRow($col, $row+2)->getHyperlink()->setUrl($contents[$row][$col]);
                    }
                    //format the width of this column if the length of the url is long.
                    if(strlen($contents[$row][$col]) > 75) {
                        $spreadsheet->getActiveSheet()->getColumnDimensionByColumn($col)->setAutoSize(false);
                        $spreadsheet->getActiveSheet()->getColumnDimensionByColumn($col)->setWidth(50);
                    }
                }
                if(is_numeric($contents[$row][$col]) && strpos($contents[$row][$col], '.') !== false) {
                    //is a decimal number, format the cell to show trailing zeros.
                    $spreadsheet->getActiveSheet()->getStyleByColumnAndRow($col, $row+2)->getNumberFormat()->setFormatCode('#,##0.00');
                }
                $spreadsheet->getActiveSheet()->getStyleByColumnAndRow($col, $row+2)->applyFromArray(
                    array(
                        'alignment' => array(
                            'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_LEFT
                        )
                    )
                );

                //set any enabled conditions.
                $conditionType = (is_numeric($contents[$row][$col]))
                    ? 'numeric'
                    : 'text';

                $this->setConditionalStyles($spreadsheet, $options['conditions'][$conditionType], $conditionType, $col, $row);

            }
        }

        //apply the freezing options.
        if($options['freeze']['head'] && $options['freeze']['left']) {
            $freeze = 'B2';
        } else if($options['freeze']['head']) {
            $freeze = 'A2';
        } else if($options['freeze']['left']) {
            $freeze = 'B1';
        } else {
            $freeze = false;
        }

        if(!is_bool($freeze)) {
            $spreadsheet->getActiveSheet()->freezePane($freeze);
        }

        //if we have asked to return the spreadsheet.
        if($returnObj) {
            return $spreadsheet;
        }

        $now = new \DateTime();

        //else push the spreadsheet to the client.
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$name.'-'.$now->format('Y-m-d').'.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = \PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
        $objWriter->save('php://output');

    }

    /**
     * generates the header styles for the header row of the spreadsheet.
     * @param $options array the options provided.
     * @return array an array of options to apply to the header cells.
     */
    private function generateHeaderStyle($options) {

        return array(
            'font' => array(
                'bold' => (is_bool($options['bold'])) ? $options['bold'] : true,
                'underline' => (is_bool($options['underline'])) ? $options['underline'] : true
            ),
            'alignment' => $options['alignment']
        );
    }

    /**
     * determine the operator type to use from the settings provided.
     * @param $type string the setting type.
     * @return bool|string the operator to use or false if the operator was invalid.
     */
    private function determineOperatorType($type) {
        switch(strtolower($type)) {
            case 'iszero':
                return \PHPExcel_Style_Conditional::OPERATOR_EQUAL;
            case 'greaterthanorequal':
                return \PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL;
            case 'lessthan':
                return \PHPExcel_Style_Conditional::OPERATOR_LESSTHAN;
            case 'contains':
                return \PHPExcel_Style_Conditional::OPERATOR_CONTAINSTEXT;
            case 'notcontains':
                return \PHPExcel_Style_Conditional::OPERATOR_NOTCONTAINS;
            case 'greaterthan':
                return \PHPExcel_Style_Conditional::OPERATOR_GREATERTHAN;
             case 'lessthanorequal':
                return \PHPExcel_Style_Conditional::OPERATOR_LESSTHANOREQUAL;
             case 'beginswith':
                return \PHPExcel_Style_Conditional::OPERATOR_BEGINSWITH;
             case 'endswith':
                return \PHPExcel_Style_Conditional::OPERATOR_ENDSWITH;
            default:
                return false;
        }
    }

    /**
     * determines the condition type to use from the settings provided.
     * @param $valueType the settings condition type.
     * @return bool|string the condition type or false if the provided type was invalid.
     */
    private function determineConditionType($valueType) {
        switch(strtolower($valueType)) {
            case 'numeric':
                return \PHPExcel_Style_Conditional::CONDITION_CELLIS;
            case 'text':
                return \PHPExcel_Style_Conditional::CONDITION_CONTAINSTEXT;
            default:
                return false;
        }
    }

    /**
     * apply conditional styles to a single cell on the spreadsheet based on the settings.
     * @param $spreadsheet \PHPExcel the spreadsheet to apply styles to.
     * @param $conditions array conditions to apply (if they are enabled)
     * @param $type string type of conditions, either numeric or text
     * @param $col int current col index for the cell
     * @param $row int current row index for the cell
     */
    private function setConditionalStyles($spreadsheet, $conditions, $type, $col, $row) {
        foreach($conditions as $conditionType => $conditionValues) {
            //check to first see if this condition is enabled.
            if($conditionValues['enabled']) {
                //determine the condition type.
                $conditional = new \PHPExcel_Style_Conditional();
                $conditional->setConditionType($this->determineConditionType($type));
                $conditional->setOperatorType($this->determineOperatorType($conditionType));
                $conditional->addCondition(''.(($conditionType == 'isZero')
                        ? 0
                        : $conditionValues['value']));

                if($type == 'text') { //we need to set the text to evaluate for.
                    $conditional->setText($conditionValues['value']);
                }

                //if the background color is white, just set the fill type to no fill, and remove the color setting.
                //the color white is matched by a string that is between 3 & 6 uppercase/lowercase 'f' values.
                if(preg_match('/^[fF]{3,6}$/i', $conditionValues['style']['fill']['color']['argb'])) {
                    $conditionValues['style']['fill']['type'] = \PHPExcel_Style_Fill::FILL_NONE;
                    unset($conditionValues['style']['fill']['color']);
                }
                $conditional->getStyle()->applyFromArray($conditionValues['style']);
                $styles = $spreadsheet->getActiveSheet()->getStyleByColumnAndRow($col, $row+2)->getConditionalStyles();
                array_push($styles, $conditional);
                $spreadsheet->getActiveSheet()->getStyleByColumnAndRow($col, $row+2)->setConditionalStyles($styles);
            }
        }
    }

}