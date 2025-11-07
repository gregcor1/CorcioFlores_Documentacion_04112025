<?php

namespace App\Http\Controllers;
use OpenApi\Attibutes as OA;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Documentacion de API Desarrolloda por Maria Jose Granillo Guardado",
 *      description="API Desarrolloda por Gregorio Javier Corcio Flores, para la Universidad Francisco Gavidia",
 *      @OA\Contact(
 *          email="ia.gregcorcio@ufg.edu.sv"
 *      ),
 *      @OA\License(
 *      name="Apache 2.0",
 *      url="http://www.apache.org/license/LICENSE-2.0.html"
 *      )
 * )
 * 
 * @OA\Server(
 *   url="http://localhost:8000/",
 *   description="Servidor local de desarrollo"
 * )
 * 
 * @OA\Server(
 *   url="http://testing.ejemplo.com/",
 *   description="Servidor para pruebas"
 * )
 * 
 * @OA\Server(
 *   url="http://mjgg.ejemplo.com/",
 *   description="Servidor de Produccion"
 * )
 * 
 * @OA\SecurityScheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   name="Authorization",
 *   in="header"
 * )
 * 
 * @OA\Tag(
 *   name="Zonas",
 *   description="Proyecto de desarrollo de Api para mantenimiento de tabla de BD catalogos especificamente para la tabla zona"
 * )
 */
abstract class Controller
{
    //
}
