<?php

class Forecast {

    public function bearingToCompass($degrees) {

        if ($degrees >= 0 && $degrees < 360) {
            $compass =
            array('N','NNE','NE','ENE','E','ESE','SE','SSE','S','SSW','SW','WSW','W','WNW','NW','NNW');

            $compassCount = fmod((($degrees + 11) / 22.5),16);
            $compassDir = $compass[$compassCount];

            return $compassDir;

        } else {
            return null;
        }
    }

}