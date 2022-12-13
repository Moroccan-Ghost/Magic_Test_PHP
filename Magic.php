<?php

$value = 1114;
$stat = "iNc";

$result = magic_inc($value, $stat);
echo 'Result for ' . $value . ' is : ' . $result;
function magic_inc($value, $stat)
{
    if ((gettype($value) != "integer" && gettype($value) != "double") || $value == 0) {
        return 0;
    } else {
        //calculateResult($value,$stat);
        if (strtolower($stat) == "inc") {
            return inc($value);
        }
        if (strtolower($stat) == "dec") {
            return dec($value);
        }
    }
}
function calculateResult($nbr,$stat){
    if ($nbr > 0) {
        if ($nbr > 0 && $nbr < 1) {
            $result = $nbr * 10;
            /**Divise to get the real part of nbr number */
            $i = 0.1;
            while ($result < 1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            if (strtolower($stat) == "inc") {
                return $nbr + $valueToIncrementWith;
            }
            if (strtolower($stat) == "dec") {
                return $nbr - $valueToIncrementWith;
            }

        }
        /**if nbr is btwn 1 and 9 */
        if ($nbr >= 1 && $nbr < 10) {
            if (strtolower($stat) == "inc") {
                return floor($nbr) + 1;
            }
            if (strtolower($stat) == "dec") {
                return floor($nbr) - 1;
            }
        }
        if ($nbr >= 10) {
            $result = $nbr / 10;
            /**Divide to get the real part of nbr number */
            $i = 10;
            while ($result >= 10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //i added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            if (strtolower($stat) == "inc") {
                return $nbr + $valueToIncrementWith;
            }
            if (strtolower($stat) == "dec") {
                return $nbr - $valueToIncrementWith;
            }

        }
    }
    else {
        if ($nbr > -1 && $nbr < 0) {
            $result = $nbr * 10;
            /**Divide to get the real part of nbr number */
            $i = 0.1;
            while ($result > -1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            if (strtolower($stat) == "inc") {
                return $nbr + $valueToIncrementWith;
            }
            if (strtolower($stat) == "dec") {
                return $nbr - $valueToIncrementWith;
            }
        }

        /**if nbr is btwn 1 and 9 */
        if ($nbr > -10 && $nbr <= -1) {
            if (strtolower($stat) == "inc") {
                return ceil($nbr) + 1;
            }
            if (strtolower($stat) == "dec") {
                return ceil($nbr) - 1;
            }
        }
        if ($nbr < -10) {
            $result = $nbr / 10;
            /**Divise to get the real part of nbr number */
            $i = 10;
            while ($result < -10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //i added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            if (strtolower($stat) == "inc") {
                return $nbr + $valueToIncrementWith;
            }
            if (strtolower($stat) == "dec") {
                return $nbr - $valueToIncrementWith;
            }
        }
    }
}
function inc($nbr)
{
    if ($nbr > 0) {
        if ($nbr > 0 && $nbr < 1) {
            $result = $nbr * 10;
            /**Divise to get the real part of nbr number */
            $i = 0.1;
            while ($result < 1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            return $nbr + $valueToIncrementWith;
        }

        /**if nbr is btwn 1 and 9 */
        if ($nbr >= 1 && $nbr < 10) {
            return floor($nbr) + 1;
        }
        if ($nbr >= 10) {
            $result = $nbr / 10;
            /**Divide to get the real part of nbr number */
            $i = 10;
            while ($result >= 10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //i added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            return $nbr + $valueToIncrementWith;
        }
    }
    else {
        if ($nbr > -1 && $nbr < 0) {
            $result = $nbr * 10;
            /**Divide to get the real part of nbr number */
            $i = 0.1;
            while ($result > -1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            return $nbr + $valueToIncrementWith;
        }

        /**if nbr is btwn 1 and 9 */
        if ($nbr > -10 && $nbr <= -1) {
            return ceil($nbr) + 1;
        }
        if ($nbr < -10) {
            $result = $nbr / 10;
            /**Divise to get the real part of nbr number */
            $i = 10;
            while ($result < -10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //i added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            return $nbr + $valueToIncrementWith;
        }
    }
}

function dec($nbr)
{
    if ($nbr < 0) {
        if ($nbr > -1 && $nbr < 0) {
            $result = $nbr * 10;
            /**Divise to get the real part of nbr number */
            $i = 0.1;
            while ($result > -1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            return $nbr + $valueToIncrementWith;
        }
        if ($nbr > -1) {
            $result = $nbr * 10;
            /**Divide to get the real part of nbr number */
            $i = 0.1;
            while ($result > -1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            return $nbr - $valueToIncrementWith;
        }

        /**if nbr is between 1 and 9 */
        if ($nbr > -10 && $nbr <= -1) {
            return ceil($nbr) - 1;
        }
        if ($nbr <= -10) {
            $result = $nbr / 10;
            /**Divide to get the real part of nbr number */
            $i = 10;
            while ($result <= -10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //I added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            return $nbr - $valueToIncrementWith;
        }
    } else {
        if ($nbr > 0 && $nbr < 1) {
            $result = $nbr * 10;
            /**Divide to get the real part of nbr number */
            $i = 0.1;
            while ($result <= 1) {
                $result = $result * 10;
                $i = $i / 10;
            }
            $valueToIncrementWith = $nbr / $result;
            $nbr = intval($nbr / $i) * $i;
            return $nbr - $valueToIncrementWith;
        }

        /**if nbr is btwn 1 and 9 */
        if ($nbr >= 1 && $nbr < 10) {
            return floor($nbr) - 1;
        }
        if ($nbr >= 10) {
            $result = $nbr / 10;
            /**Divide to get the real part of nbr number */
            $i = 10;
            while ($result >= 10) {
                $result = $result / 10;
                $i = $i * 10;
            }
            $valueToIncrementWith = $nbr / $result;
            //i added the i counter to get the reel part of nbr and then add the valueToIncrementWith to it after :)
            $nbr = intval($nbr / $i) * $i;
            return $nbr - $valueToIncrementWith;
        }
    }
}

?>