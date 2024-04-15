
![Texto alternativo](./assets/img/CentroGeo_Logo-H_25.png "CentroGeo")
![Texto alternativo](./assets/img/CONAHCYT.png "Conahcyt")

# Repositorio de Proyectos de Posgrado en Ciencia de Datos Espaciales

Este repositorio contiene los procesos y datos desarrollados para los proyectos finales de las materias de Sistemas de Información Geográfica, Análisis Espacial y Procesos de Ciencia de Datos Espaciales, materia del Posgrado Integrado en Ciencia de Datos Espaciales de CentroGEO.

## Detalle de los Proyectos:

### Sistemas de Información Geográfica

- **Objetivo:** Estimación de zonas potenciales para la captación de agua de lluvia a nivel catastral mediante agrupación por estadística local (HotSpots) en la Ciudad de México (CDMX).
- **Datos Utilizados:**
  - Catastro, sig CDMX
  - Censo 2020, INEGI
  - Consumo bimestral de agua por manzana, Sacmex
  - Tandeos de agua, IPDP.
  - Datos de EMAS, CONAGUA.
- **Procesos Implementados:**
  - Creación de una base de datos espacial
  - Obtención de índices de escasez por manzana
  - Análisis de componente principales para índice de acceso a infraestructura de agua.
  - Cálculo del RCHP (Potencial de Captura y Recolección de Agua de Lluvia)
  - Interpolación de datos de precipitación.
  - Análisis de estadística local basado en los resultados finales

### Análisis Espacial

- **Objetivo:** Realizar tres procesos de análisis espacial vistos en la materia.
- **Datos Utilizados:**
  - Censo 2020, INEGI
  - Déficit de consumo de agua a nivel manzana, Propio.
  - Datos de EMAS, CONAGUA.
- ** Procesos Implementados:**
  - Análisis de Componentes Principales para obtener un índice de acceso a infraestructura de agua.
- **Variables Analizadas para ACP:**
  - Déficit de consumo de agua
  - Acceso a agua entubada
  - Acceso a drenaje
  - Acceso a cisterna
  - Acceso a tinaco
  - Método de interpolación geoestadística espacial Kriging, utilizando datos de las EMAS (Estaciones Meteorológicas Automatizadas) de la CONAGUA para determinar el promedio de precipitación en la CDMX a 30 años.
   - Agrupación por estadística local Getis- Ord (HotSpots) de zonas de captación de agua de lluvia.

### Procesos de Ciencia de Datos Espaciales
- **Objetivo:** Georreferenciación de zonas con problemáticas de agua, actualización de una base de datos espacial para reporte de problemas de escasez y visualización dinámica de la información mediante un mapa web.
- ** Procesos Implementados:**
  - Webscraping y geocoding para identificar zonas problemáticas a partir de páginas de noticias
  - Desarrollo de una app móvil para el levantamiento de datos geoespaciales
  - Mapa web que incorpora la base de datos actualizada y realiza simbología basada en la clusterización de los datos para analizar las zonas con mayores conflictos de agua

Estos proyectos destacan el uso interdisciplinario de herramientas geoespaciales y de análisis de datos para abordar cuestiones críticas relacionadas con la gestión y distribución de recursos hídricos en áreas urbanas.
