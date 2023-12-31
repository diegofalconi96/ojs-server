<?php return array (
  'plugins.importexport.datacite.displayName' => 'Módulo de exportación/registro de DataCite',
  'plugins.importexport.datacite.description' => 'Exportar o registrar metadatos de número, de artículo, de galerada y de archivos complementarios en formato DataCite.',
  'plugins.importexport.datacite.intro' => '
		Si quiere registrar los DOI con DataCite, contacte con el Agente de gestión a través de la <a href="http://datacite.org/contact" target="_blank">Página de inicio de DataCite</a>. Éste le remitirá a su miembro local de DataCite. Una vez contactado el miembro de la organización, tendrá acceso al servicio de DataCite para generar los identificadores persistentes (DOI) y registrar los metadatos relacionados. Si no posee su propio nombre de usuario/a y contraseña, podrá exportar en formato XML DataCite pero no podrá registrar sus DOI con DataCite dentro de OJS. Tenga en cuenta que la contraseña se guardará como texto plano, es decir, sin encriptar, debido a los requisitos del servicio de registro DataCite.
	',
  'plugins.importexport.datacite.settings.form.username' => 'Nombre de usuario/a (símbolo)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Introduzca el nombre de usuario/a (símbolo) que le proporcionó DataCite. El nombre de usuario/a no puede contener dos puntos.',
  'plugins.importexport.datacite.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
  'plugins.importexport.datacite.settings.description' => 'Configure el módulo de exportación DataCite antes de usarlo por primera vez.',
  'plugins.importexport.datacite.senderTask.name' => 'Tarea de registro automático DataCite',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS depositará los DOI automáticamente en DataCite. Tenga en cuenta que este proceso puede llevar cierto tiempo tras la publicación (p.ej. en función de su configuración cron). Puede comprobar todos los DOI no registrados.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Utilice el prefijo de prueba DataCite para registrar los DOI. No olvide desactivar esta opción en la versión de producción.',
); ?>