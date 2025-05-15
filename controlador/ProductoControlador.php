<?php
// controlador/ProductoControlador.php

require_once __DIR__ . '/../modelo/Producto.php';

class ProductoControlador
{
    public static function obtenerProductosDestacados()
    {
        $productos = [];

        $productos[] = new Producto(
            "Lavadora 11 Kilogramos Haceb Panel Frontal Digital Gris",
            "../IMAGENES/7704353431483-1.webp",
            50000,
            "Por 1 día",
            "La lavadora Haceb, tiene período de uso de 2 meses. Marca: Haceb...",
            "HTML/Lavadora.php"
        );

        $productos[] = new Producto(
            "Televisor 32 Pulgadas Challenger LED TV3",
            "../IMAGENES/7705191043944_01.webp",
            65000,
            "Por 1 día",
            "El Televisor 32\" Challenger LED TV es un televisor con tiempo de uso de 5 meses...",
            "HTML/televisor.php"
        );

        $productos[] = new Producto(
            "Xbox 360",
            "../IMAGENES/41G+FzEeRCL.jpg",
            49900,
            "Por 1 día",
            "La Xbox 360 tiene un tiempo de uso de 1 año...",
            "HTML/xbox.php"
        );

        $productos[] = new Producto(
            "CAMPING IGLU ROYAKAMP 4 PERSONAS",
            "../IMAGENES/tienda-turistica-aislado-sobre-fondo-blanco_873674-588.avif",
            35000,
            "Por 3 días",
            "La tienda Iglú es ideal para 4 personas...",
            "HTML/camping.php"
        );

        $productos[] = new Producto(
            "Renault Kwid 2019",
            "../IMAGENES/Renault Kwid.jpeg",
            500000,
            "Por 7 días",
            "El Renault Kwid es modelo 2019 con 35.000 km, económico y práctico...",
            "HTML/carro.php"
        );

        $pcDetalle = file_exists(__DIR__ . '/../vista/HTML/pcgamer.php') ? "HTML/pcgamer.php" : "#";
        $productos[] = new Producto(
            "PC Gamer Ryzen 5",
            "../IMAGENES/PCRYZEN.webp",
            150000,
            "Por 5 días",
            "Computador de escritorio con procesador Ryzen 5, 16 GB RAM, tarjeta gráfica GTX 1660...",
            $pcDetalle
        );

        return $productos;
    }
}
