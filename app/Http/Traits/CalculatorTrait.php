<?php

namespace App\Http\Traits;

/**
 * Traint for use in calculator controllers
 */
trait CalculatorTrait
{
    // Returns the coefficient by the name of the culture
    private function getK1(string $name)
    {
        $culture = [
            'Фасоль' => 0.15,
            'Горох' => 0.5,
            'Пшеница' => 1,
            'Кукуруза' => 0.6,
            'Рожь' => 1.1,
            'Ячмень' => 1,
            'Рапс' => 0.5,
            'Лен' => 0.25,
            'Рыжик' => 0.25,
            'Подсолнечник' => 0.5,
            'Гречиха' => 1.25,
            'Овес' => 1,
            'Чечевица' => 0.3,
            'Рис' => 0.4,
            'Вика' => 0.3,
        ];
        return $culture[$name];
    }

    // Returns the valuew of volume by the name of the culture
    private function getK1Volume(string $name)
    {
        $culture = [
            'Фасоль' => 750,
            'Горох' => 750,
            'Пшеница' => 750,
            'Кукуруза' => 700,
            'Рожь' => 700,
            'Ячмень' => 650,
            'Рапс' => '',
            'Лен' => 650,
            'Рыжик' => 650,
            'Подсолнечник' => 350,
            'Гречиха' => 550,
            'Овес' => 500,
            'Чечевица' => 765,
            'Рис' => 600,
            'Вика' => 750,
        ];
        return $culture[$name];
    }

    // Returns the value of an element of a multidimensional array by the keys passed to the parameters
    private function getK2($vertical, $horizontal) // you can use int|float in php8
    {
        $k2 = [
            22 => [
                12 => 2.27,	2.05,	1.87,	1.72,	1.58,	1.4,1.22,	1.04,
            ],
            [
                12 => 2.34,	2.12,	1.92,	1.77,	1.65,	1.44,	1.27, 1.1,	0.87,
            ],
            [
                12 => 2.41,	2.2,	1.99,	1.81,	1.72,	1.46,	1.34,	1.16,	0.93,	0.78,
            ],
            [
                12 => 2.49,	2.27,	2.05,	1.87,	1.78,	1.52,	1.4,	1.21,	0.98,	0.87,	0.69,
            ],
            [
                12 => 2.56,	2.34,	2.12,	1.9,	1.85,	1.59,	1.46,	1.27,	1.04,	0.93,	0.79,	0.62,
            ],
            [
                12 => 2.64,	2.41,	2.2,	1.96,	1.92,	1.65,	1.52,	1.34,	1.1,	0.98,	0.86,	0.7,	0.62,
            ],
            [
                12 => 2.72,	2.49,	2.27,	2,	1.99,	1.72,	1.59,	1.4,	1.16,	1.04,	0.95,	0.76,	0.7,	0.54,
            ],
            [
                12 => 2.79,	2.56,	2.34,	2.06,	2.05,	1.78,	1.65,	1.46,	1.21,	1.1,	1,	0.82,	0.76,	0.6,	0.51,
            ],
            [
                12 => 2.87,	2.64,	2.41,	2.12,	2.12,	1.85,	1.72,	1.52,	1.27,	1.16,	1.04,	0.87,	0.82,	0.68,	0.59,
            ],
            [
                12 => 2.95,	2.72,	2.49,	2.2,	2.2,	1.92,	1.78,	1.59,	1.34,	1.21,	1.1,	0.93,	0.87,	0.78,	0.66,	0.57,	0.47,
            ],
            [
                12 => 3.03,	2.79,	2.56,	2.27,	2.27,	1.99,	1.85,	1.65,	1.4,	1.27,	1.16,	0.98,	0.93,	0.85,	0.74,	0.62,	0.54,	0.42,
            ],
            [
                12 => 3.11,	2.87,	2.64,	2.34,	2.34,	2.05,	1.92,	1.72,	1.46,	1.34,	1.21,	1.04,	0.98,	0.92,	0.8,	0.7,	0.6,	0.52,
            ],
            [
                12 => 3.19,	2.95,	2.72,	2.41,	2.41,	2.12,	1.99,	1.78,	1.52,	1.4,	1.27,	1.1,	1.04,	0.98,	0.87,	0.76,	0.67,	0.53,	0.47, 0.38,
            ],
            [
                12 => 3.27,	3.03,	2.79,	2.49,	2.49,	2.2,	2.05,	1.85,	1.59,	1.46,	1.34,	1.16,	1.1,	1.04,	0.93,	0.82,	0.72,	0.57,	0.52,	0.45,
            ],
            [
                12 => 3.36,	3.11,	2.87,	2.56,	2.56,	2.27,	2.12,	1.92,	1.65,	1.52,	1.4,	1.21,	1.16,	1.1,	0.98,	0.87,	0.8,	0.65,	0.65,	0.53,	0.46,	0.35,
            ],
            [
                12 => 3.44,	3.19,	2.95,	2.64,	2.64,	2.34,	2.2,	1.99,	1.72,	1.59,	1.46,	1.27,	1.21,	1.16,	1.04,	0.93,	0.86,	0.72,	0.68,	0.59,	0.5,	0.44,
            ],
            [
                12 => 3.53,	3.27,	3.03,	2.72,	2.72,	2.41,	2.27,	2.05,	1.78,	1.65,	1.52,	1.34,	1.27,	1.21,	1.1,	0.98,	0.9,	0.8,	0.74,	0.66,	0.57,	0.49,	0.42,
            ],
            [
                12 => 3.61,	3.36,	3.11,	2.79,	2.79,	2.49,	2.34,	2.12,	1.85,	1.72,	1.59,	1.4,	1.34,	1.27,	1.16,	1.04,	0.94,	0.84,	0.8,	0.73,	0.64,	0.56,	0.46,	0.42,
            ],
            [
                12 => 3.7,	3.44,	3.19,	2.87,	2.87,	2.56,	2.41,	2.2,	1.92,	1.78,	1.65,	1.46,	1.4,	1.34,	1.21,	1.1,	1,	0.87,	0.85,	0.8,	0.71,	0.63,	0.54,	0.47,
            ],
            [
                12 => 3.78,	3.53,	3.27,	2.95,	2.95,	2.64,	2.49,	2.27,	1.99,	1.85,	1.72,	1.52,	1.46,	1.4,	1.27,	1.16,	1.03,	0.99,	0.93,	0.86,	0.78,	0.7,	0.61,	0.53,	0.43,	0.39,
            ],
            [
                12 => 3.87,	3.61,	3.36,	3.03,	3.03,	2.72,	2.56,	2.34,	2.05,	1.92,	1.78,	1.59,	1.52,	1.46,	1.34,	1.21,	1.1,	1.03,	0.97,	0.92,	0.85,	0.77,	0.69,	0.6,	0.52,	0.45,
            ],
            [
                12 => 3.96,	3.7,	3.44,	3.11,	3.11,	2.79,	2.64,	2.41,	2.12,	1.99,	1.85,	1.65,	1.59,	1.52,	1.4,	1.27,	1.15,	1.08,	1.01,	0.96,	0.91,	0.84,	0.76,	0.68,	0.59,	0.52,
            ],
            [
                12 => 4.05,	3.78,	3.53,	3.19,	3.19,	2.87,	2.72,	2.49,	2.2,	2.05,	1.92,	1.72,	1.65,	1.59,	1.46,	1.34,	1.2,	1.13,	1.08,	1.01,	0.96,	0.89,	0.82,	0.75,	0.68,	0.58,	0.51,
            ],
            [
                12 => 4.14,	3.87,	3.61,	3.27,	3.27,	2.95,	2.79,	2.56,	2.27,	2.12,	1.99,	1.78,	1.72,	1.65,	1.52,	1.4,	1.27,	1.17,	1.12,	1.07,	1,	0.95,	0.88,	0.82,	0.74,	0.66,	0.58,
            ],
            [
                12 => 4.23,	3.96,	3.7,	3.36,	3.36,	3.03,	2.87,	2.64,	2.34,	2.2,	2.05,	1.85,	1.78,	1.72,	1.59,	1.46,	1.35,	1.23,	1.18,	1.12,	1.05,	1,	0.94,	0.86,	0.79,	0.72,	0.74,	0.61,	0.53,
            ],
            [
                12 => 4.32,	4.05,	3.78,	3.44,	3.44,	3.11,	2.95,	2.72,	2.41,	2.27,	2.12,	1.92,	1.85,	1.78,	1.65,	1.52,	1.39,	1.29,	1.22,	1.15,	1.1,	1.03,	0.99,	0.92,	0.83,	0.78,	0.66,	0.66,	0.57,	0.46,	0.39,	0.32,
            ],
            [
                12 => 4.42,	4.14,	3.87,	3.53,	3.53,	3.19,	3.03,	2.79,	2.49,	2.34,	2.2,	1.99,	1.92,	1.85,	1.72,	1.59,	1.46,	1.37,	1.29,	1.22,	1.15,	1.08,	1.01,	0.96,	0.91,	0.84,	0.8,	0.72,	0.65,	0.56,	0.48,	0.42,
            ],
            [
                12 => 4.51,	4.23,	3.96,	3.61,	3.61,	3.27,	3.11,	2.87,	2.56,	2.41,	2.27,	2.05,	1.99,	1.92,	1.78,	1.65,	1.5,	1.43,	1.37,	1.27,	1.22,	1.13,	1.09,	1,	0.96,	0.89,	0.85,	0.79,	0.71,	0.64,	0.56,	0.48,
            ],
            [
                12 => 4.6,	4.32,	4.05,	3.7,	3.7,	3.36,	3.19,	2.95,	2.64,	2.49,	2.34,	2.12,	2.05,	1.99,	1.85,	1.72,	1.54,	1.47,	1.43,	1.34,	1.28,	1.2,	1.13,	1.07,	1,	0.95,	0.89,	0.84,	0.78,	0.7,	0.64,	0.54,
            ],
            [
                12 => 4.7,	4.42,	4.14,	3.78,	3.78,	3.44,	3.27,	3.03,	2.72,	2.56,	2.41,	2.2,	2.12,	2.05,	1.92,	1.78,	1.53,	1.52,	1.45,	1.4,	1.34,	1.24,	1.2,	1.12,	1.07,	1,	0.93,	0.88,	0.82,	0.77,	0.7,	0.63,
            ],
            [
                12 => 4.79,	4.51,	4.23,	3.87,	3.87,	3.53,	3.36,	3.11,	2.79,	2.64,	2.49,	2.27,	2.2,	2.12,	1.99,	1.85,	1.63,	1.57,	1.5,	1.44,	1.39,	1.34,	1.27,	1.17,	1.13,	1.05,	0.99,	0.93,	0.88,	0.82,	0.77,	0.7,	0.62,	0.54,
            ],
            [
                12 => 4.89,	4.6,	4.32,	3.96,	3.96,	3.61,	3.44,	3.19,	2.87,	2.72,	2.56,	2.34,	2.27,	2.2,	2.05,	1.92,	1.69,	1.64,	1.56,	1.5,	1.43,	1.37,	1.31,	1.24,	1.17,	1.12,	1.05,	0.97,	0.93,	0.87,	0.82,	0.76,	0.69,	0.62,
            ],
            [
                12 => 4.99,	4.7,	4.42,	4.05,	4.05,	3.7,	3.53,	3.27,	2.95,	2.79,	2.64,	2.41,	2.34,	2.27,	2.12,	1.99,	1.75,	1.69,	1.62,	1.56,	1.5,	1.45,	1.39,	1.31,	1.24,	1.17,	1.12,	1.05,	0.99,	0.92,	0.87,	0.82,	0.76,	0.69,
            ],
            [
                12 => 5.09,	4.79,	4.51,	4.14,	4.14,	3.78,	3.61,	3.36,	3.03,	2.87,	2.72,	2.49,	2.41,	2.34,	2.2,	2.05,	1.81,	1.75,	1.69,	1.62,	1.56,	1.5,	1.44,	1.37,	1.29,	1.22,	1.17,	1.1,	1.03,	0.97,	0.92,	0.86,	0.82,	0.75,
            ],
            [
                12 => 5.18,	4.89,	4.6,	4.23,	4.23,	3.87,	3.7,	3.44,	3.11,	2.95,	2.79,	2.56,	2.49,	2.41,	2.27,	2.12,	1.88,	1.82,	1.75,	1.69,	1.63,	1.56,	1.5,	1.44,	1.37,	1.29,	1.24,	1.17,	1.12,	1.03,	0.97,	0.92,	0.86,	0.82,	0.75,	0.69,	0.62,
            ],
            [
                12 => 5.28,	4.99,	4.7,	4.32,	4.32,	3.96,	3.78,	3.53,	3.19,	3.03,	2.87,	2.64,	2.56,	2.49,	2.34,	2.2,	1.95,	1.88,	1.82,	1.75,	1.68,	1.62,	1.55,	1.49,	1.44,	1.34,	1.29,	1.22,	1.17,	1.1,	1.03,	0.96,	0.92,	0.86,	0.8,	0.74,	0.68,
            ],
            [
                12 => 5.39,	5.09,	4.79,	4.42,	4.42,	4.05,	3.87,	3.61,	3.27,	3.11,	2.95,	2.72,	2.64,	2.56,	2.41,	2.27,	2.01,	1.94,	1.88,	1.82,	1.75,	1.69,	1.62,	1.57,	1.49,	1.43,	1.37,	1.29,	1.24,	1.17,	1.1,	1.03,	0.97,	0.92,	0.85,	0.8,	0.74,	0.68,	0.62,
            ],
            [
                12 => 5.49,	5.18,	4.89,	4.51,	4.51,	4.14,	3.96,	3.7,	3.36,	3.19,	3.03,	2.79,	2.72,	2.64,	2.49,	2.34,	2.07,	2.01,	1.94,	1.87,	1.81,	1.74,	1.68,	1.61,	1.54,	1.48,	1.42,	1.34,	1.29,	1.22,	1.17,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,	0.68,	0.61,
            ],
            [
                12 => 5.59,	5.28,	4.99,	4.6,	4.6,	4.23,	4.05,	3.78,	3.44,	3.27,	3.11,	2.87,	2.79,	2.72,	2.56,	2.41,	2.15,	2.07,	2,	1.95,	1.87,	1.81,	1.74,	1.68,	1.61,	1.54,	1.48,	1.42,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.79,	0.74,	0.69,	0.6,	0.5,	0.4,
            ],
            [
                12 => 5.69,	5.39,	5.09,	4.7,	4.7,	4.32,	4.14,	3.87,	3.53,	3.36,	3.19,	2.95,	2.87,	2.79,	2.64,	2.49,	2.2,	2.14,	2.07,	2.01,	1.94,	1.87,	1.81,	1.74,	1.68,	1.61,	1.54,	1.48,	1.42,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,	0.63,	0.6,	0.48,
            ],
            [
                12 => 5.8,	5.49,	5.18,	4.79,	4.79,	4.42,	4.23,	3.96,	3.61,	3.44,	3.27,	3.03,	2.95,	2.87,	2.72,	2.56,	2.26,	2.2,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.68,	1.61,	1.55,	1.48,	1.42,	1.37,	1.29,	1.22,	1.15,	1.1,	1.01,	0.97,	0.91,	0.85,	0.8,	0.74,	0.68,	0.56,
            ],
            [
                12 => 5.9,	5.59,	5.28,	4.89,	4.89,	4.51,	4.32,	4.05,	3.7,	3.53,	3.36,	3.11,	3.03,	2.95,	2.79,	2.64,	2.32,	2.23,	2.2,	2.13,	2.07,	2,	1.94,	1.87,	1.8,	1.74,	1.68,	1.61,	1.55,	1.48,	1.41,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,	0.66,
            ],
            [
                12 => 6.01,	5.69,	5.39,	4.99,	4.99,	4.6,	4.42,	4.14,	3.78,	3.61,	3.44,	3.19,	3.11,	3.03,	2.87,	2.72,	2.39,	2.33,	2.26,	2.19,	2.15,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.68,	1.61,	1.55,	1.49,	1.42,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 6.11,	5.8,	5.49,	5.09,	5.09,	4.7,	4.51,	4.23,	3.87,	3.7,	3.53,	3.27,	3.19,	3.11,	2.95,	2.79,	2.45,	2.39,	2.33,	2.26,	2.19,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.68,	1.61,	1.55,	1.49,	1.42,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 6.22,	5.9,	5.59,	5.18,	5.18,	4.79,	4.6,	4.32,	3.96,	3.78,	3.61,	3.36,	3.27,	3.19,	3.03,	2.87,	2.52,	2.46,	2.4,	2.33,	2.27,	2.2,	2.14,	2.07,	2.01,	1.94,	1.88,	1.82,	1.74,	1.69,	1.63,	1.55,	1.49,	1.43,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 6.33,	6.01,	5.69,	5.28,	5.28,	4.89,	4.7,	4.42,	4.05,	3.87,	3.7,	3.44,	3.36,	3.27,	3.11,	2.95,	2.58,	2.52,	2.46,	2.39,	2.33,	2.27,	2.2,	2.14,	2.07,	2.01,	1.94,	1.88,	1.82,	1.74,	1.69,	1.62,	1.55,	1.49,	1.43,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 6.44,	6.11,	5.8,	5.39,	5.39,	4.99,	4.79,	4.51,	4.14,	3.96,	3.78,	3.53,	3.44,	3.36,	3.19,	3.03,	2.64,	2.58,	2.52,	2.45,	2.39,	2.33,	2.26,	2.2,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.68,	1.62,	1.55,	1.49,	1.42,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.79,
            ],
            [
                12 => 6.54,	6.22,	5.9,	5.49,	5.49,	5.09,	4.89,	4.6,	4.23,	4.05,	3.87,	3.61,	3.53,	3.44,	3.27,	3.11,	2.7,	2.64,	2.57,	2.51,	2.45,	2.38,	2.32,	2.29,	2.19,	2.13,	2.07,	2,	1.93,	1.87,	1.81,	1.74,	1.68,	1.61,	1.55,	1.48,	1.42,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.85,	0.83,	0.78,	0.7,
            ],
            [
                12 => 6.65,	6.33,	6.01,	5.59,	5.59,	5.18,	4.99,	4.7,	4.32,	4.14,	3.96,	3.7,	3.61,	3.53,	3.36,	3.19,	2.77,	2.71,	2.64,	2.58,	2.52,	2.45,	2.39,	2.32,	2.26,	2.2,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.75,	1.68,	1.62,	1.55,	1.49,	1.42,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 6.77,	6.44,	6.11,	5.69,	5.69,	5.28,	5.09,	4.79,	4.42,	4.23,	4.05,	3.78,	3.7,	3.61,	3.44,	3.27,	2.83,	2.77,	2.71,	2.64,	2.58,	2.51,	2.45,	2.38,	2.32,	2.26,	2.2,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.67,	1.61,	1.55,	1.46,	1.42,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 6.88,	6.54,	6.22,	5.8,	5.8,	5.39,	5.18,	4.89,	4.51,	4.32,	4.14,	3.87,	3.78,	3.7,	3.53,	3.36,	2.9,	2.84,	2.79,	2.71,	2.64,	2.58,	2.51,	2.46,	2.39,	2.32,	2.26,	2.19,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.74,	1.68,	1.62,	1.55,	1.49,	1.42,	1.37,	1.29,	1.22,	1.15,	1.08,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 6.99,	6.65,	6.33,	5.9,	5.9,	5.49,	5.28,	4.99,	4.6,	4.42,	4.23,	3.96,	3.87,	3.78,	3.61,	3.44,	2.95,	2.9,	2.83,	2.77,	2.7,	2.64,	2.58,	2.51,	2.45,	2.39,	2.32,	2.26,	2.19,	2.13,	2.06,	2,	1.93,	1.87,	1.8,	1.74,	1.68,	1.62,	1.55,	1.49,	1.42,	1.34,	1.29,	1.2,	1.15,	1.08,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 7.1,	6.77,	6.44,	6.01,	6.01,	5.59,	5.39,	5.09,	4.7,	4.51,	4.32,	4.05,	3.96,	3.87,	3.7,	3.53,	3.02,	2.96,	2.89,	2.83,	2.77,	2.7,	2.64,	2.57,	2.51,	2.43,	2.39,	2.32,	2.26,	2.19,	2.13,	2.09,	2,	1.93,	1.87,	1.81,	1.75,	1.68,	1.61,	1.55,	1.48,	1.42,	1.37,	1.27,	1.22,	1.15,	1.1,	1.08,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 7.22,	6.88,	6.54,	6.11,	6.11,	5.69,	5.49,	5.18,	4.79,	4.6,	4.42,	4.14,	4.05,	3.96,	3.78,	3.61,	3.08,	3.02,	2.96,	2.89,	2.83,	2.76,	2.7,	2.64,	2.58,	2.49,	2.38,	2.37,	2.32,	2.25,	2.19,	2.13,	2.06,	1.99,	1.93,	1.87,	1.8,	1.72,	1.68,	1.6,	1.54,	1.48,	1.4,	1.31,	1.29,	1.2,	1.15,	1.16,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 7.33,	6.99,	6.65,	6.22,	6.22,	5.8,	5.59,	5.28,	4.89,	4.7,	4.51,	4.23,	4.14,	4.05,	3.87,	3.7,	3.14,	3.08,	3.02,	2.96,	2.89,	2.83,	2.77,	2.7,	2.64,	2.55,	2.45,	2.45,	2.38,	2.3,	2.25,	2.2,	2.12,	2.06,	2,	1.92,	1.86,	1.79,	1.74,	1.68,	1.6,	1.55,	1.48,	1.39,	1.35,	1.25,	1.2,	1.2,	1.09,	1.04,	0.95,	0.89,	0.85,	0.8,
            ],
            [
                12 => 7.45,	7.1,	6.77,	6.33,	6.33,	5.9,	5.69,	5.39,	4.99,	4.79,	4.6,	4.32,	4.23,	4.14,	3.96,	3.78,	3.2,	3.14,	3.08,	3.02,	2.96,	2.89,	2.83,	2.77,	2.7,	2.64,	2.57,	2.51,	2.45,	2.38,	2.32,	2.25,	2.18,	2.12,	2.06,	1.99,	1.93,	1.87,	1.8,	1.74,	1.67,	1.61,	1.55,	1.48,	1.42,	1.34,	1.29,	1.28,	1.15,	1.13,	1.03,	0.96,	0.91,	0.84,	0.8,	0.74,
            ],
            [
                12 => 7.57,	7.22,	6.88,	6.44,	6.44,	6.01,	5.8,	5.49,	5.09,	4.89,	4.7,	4.42,	4.32,	4.23,	4.05,	3.87,	3.28,	3.21,	3.15,	3.09,	3.02,	2.96,	2.9,	2.83,	2.77,	2.71,	2.64,	2.58,	2.52,	2.45,	2.39,	2.32,	2.24,	2.2,	2.14,	2.06,	2,	1.95,	1.86,	1.8,	1.75,	1.68,	1.6,	1.56,	1.5,	1.4,	1.39,	1.37,	1.22,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 7.68,	7.33,	6.99,	6.54,	6.54,	6.11,	5.9,	5.59,	5.18,	4.99,	4.79,	4.51,	4.42,	4.32,	4.14,	3.96,	3.33,	3.28,	3.21,	3.15,	3.09,	3.02,	2.96,	2.9,	2.83,	2.77,	2.7,	2.64,	2.58,	2.52,	2.45,	2.39,	2.32,	2.25,	2.19,	2.13,	2.06,	2,	1.94,	1.87,	1.81,	1.75,	1.68,	1.62,	1.55,	1.49,	1.46,	1.43,	1.29,	1.29,	1.23,	1.18,	1.1,	1.05,	0.98,	0.9,	0.85,	0.8,
            ],
            [
                12 => 7.8,	7.45,	7.1,	6.65,	6.65,	6.22,	6.01,	5.69,	5.28,	5.09,	4.89,	4.6,	4.51,	4.42,	4.23,	4.05,	3.4,	3.34,	3.28,	3.22,	3.15,	3.08,	3.02,	2.96,	2.9,	2.83,	2.77,	2.71,	2.64,	2.58,	2.51,	2.45,	2.39,	2.32,	2.26,	2.19,	2.13,	2.07,	2,	1.94,	1.88,	1.81,	1.75,	1.7,	1.62,	1.55,	1.53,	1.49,	1.4,	1.37,	1.29,	1.22,	1.15,	1.1,	1.03,	0.97,	0.91,	0.85,	0.8,	0.74,
            ],
            [
                12 => 7.92,	7.57,	7.22,	6.77,	6.77,	6.33,	6.11,	5.8,	5.39,	5.18,	4.99,	4.7,	4.6,	4.51,	4.32,	4.14,	3.45,	3.4,	3.33,	3.29,	3.21,	3.14,	3.08,	3.01,	2.95,	2.89,	2.83,	2.76,	2.7,	2.64,	2.58,	2.51,	2.45,	2.39,	2.32,	2.26,	2.19,	2.13,	2.07,	2,	1.94,	1.87,	1.81,	1.75,	1.68,	1.62,	1.6,	1.58,	1.54,	1.44,	1.35,	1.29,	1.2,	1.13,	1.06,	0.99,	0.96,	0.9,	0.85,	0.8,
            ],
        ];
        return $k2[$vertical*2][$horizontal*2];
    }

}
