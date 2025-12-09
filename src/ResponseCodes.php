<?php

namespace ResponseCodes;

class ResponseCodes
{
    private static array $codes = [
        500 => [
            'icon' => 'error',
            'translations' => [
                'en' => [
                    'title' => 'Internal Server Error',
                    'message' => 'A generic error message, given when no more specific message is suitable.'
                ],
                'pt' => [
                    'title' => 'Erro interno do servidor',
                    'message' => 'Mensagem genérica de erro, usada quando nenhuma mensagem mais específica é adequada.'
                ],
                'es' => [
                    'title' => 'Error interno del servidor',
                    'message' => 'Mensaje de error genérico, dado cuando no hay un mensaje más específico.'
                ]
            ]
        ]
    ];

    public static function get(int|string $code, string $lang = 'en'): ?array
    {
        if (!isset(self::$codes[$code])) {
            return null;
        }

        $response = self::$codes[$code];
        $translation = $response['translations'][$lang] ?? $response['translations']['en'];

        return [
            'code' => $code,
            'icon' => $response['icon'],
            'title' => $translation['title'],
            'message' => $translation['message'],
        ];
    }
}