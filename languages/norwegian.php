<?php

// WebSVN - Subversion repository viewing via the web using PHP
// Copyright (C) 2004 Tim Armes
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// --
//
// norwegian.php
//
// Norwegian language strings
// by Sigve Indregard <sigve.indregard@gmail.com>.

// Translation notes:
// - I've tried to keep with the translations made in the Norwegian version
//   of "Version Control with Subversion"
// - I've kept the abbreviation "diff"

// The language name is displayed in the drop down box.  It MUST be encoded as Unicode (no HTML entities).
$lang["LANGUAGENAME"] = "Norwegian";
// The language tag (see RFC 4646) which corresponds to this translation.
$lang["LANGUAGETAG"] = "no";

$lang["LOG"] = "Logg";
$lang["DIFF"] = "Diff";

$lang["NOREP"] = "Depot ble ikke angitt";
$lang["NOPATH"] = "Stien ble ikke funnet";
$lang["SUPPLYREP"] = "Vennligst sett opp en depotsti i include/config.php ved hjelp av \$config->parentPath eller \$config->addRepository.<p>Se installasjonsguiden for detaljer.";

$lang["DIFFREVS"] = "Diff mellom revisjoner";
$lang["AND"] = "og";
$lang["REV"] = "Rev";
$lang["LINE"] = "Linje";
$lang["SHOWENTIREFILE"] = "Vis hele filen";
$lang["SHOWCOMPACT"] = "Vis kun områder med forskjeller";

$lang["DIFFPREV"] = "Sammenlign med forrige";
$lang["BLAME"] = "Ansvarlig";

$lang["REVINFO"] = "Revisjonsinformasjon";
$lang["GOYOUNGEST"] = "Gå til nyeste revisjon";
$lang["LASTMOD"] = "Siste endring";
$lang["LOGMSG"] = "Loggmelding";
$lang["CHANGES"] = "Endringer";
$lang["SHOWCHANGED"] = "Vis endrede filer";
$lang["HIDECHANGED"] = "Gjem endrede filer";
$lang["NEWFILES"] = "Nye filer";
$lang["CHANGEDFILES"] = "Endrede filer";
$lang["DELETEDFILES"] = "Slettede filer";
$lang["VIEWLOG"] = "Vis logg";
$lang["PATH"] = "Sti";
$lang["AUTHOR"] = "Forfatter";
$lang["AGE"] = "Alder";
$lang["LOG"] = "Logg";
$lang["CURDIR"] = "Gjeldende katalog";
$lang["TARBALL"] = "Tar-ball";

$lang["PREV"] = "Forrige";
$lang["NEXT"] = "Neste";
$lang["SHOWALL"] = "Vis alle";

$lang["BADCMD"] = "En feil oppstod under utførelse av denne kommandoen";

$lang["POWERED"] = "Kjører på <a href=\"http://www.websvn.info/\">WebSVN</a>";
$lang["PROJECTS"] = "Subversionprosjekter";
$lang["SERVER"] = "Subversiontjener";

$lang["SEARCHLOG"] = "Søk i loggen etter";
$lang["CLEARLOG"] = "Tøm gjeldende søk";
$lang["MORERESULTS"] = "Finn flere treff...";
$lang["NORESULTS"] = "Ingen loggmeldinger passer til ditt søk";
$lang["NOMORERESULTS"] = "Ingen flere loggmeldinger passer til ditt søk";
$lang["NOPREVREV"] = "Ingen tidligere revisjon";

$lang["RSSFEEDTITLE"] = "WebSVN RSS-strøm";
$lang["FILESMODIFIED"] = "fil(er) endret";
$lang["RSSFEED"] = "RSS-strøm";

$lang["LINENO"] = "Linjenr.";
$lang["BLAMEFOR"] = "Ansvarliginformasjon for rev.";

$lang["YEARS"] = "år";
$lang["MONTHS"] = "måneder";
$lang["WEEKS"] = "uker";
$lang["DAYS"] = "dager";
$lang["HOURS"] = "timer";
$lang["MINUTES"] = "minutter";

$lang["GO"] = "Gå";

$lang["PATHCOMPARISON"] = "Stisammenligning";
$lang["COMPAREPATHS"] = "Sammenlign stier";
$lang["COMPAREREVS"] = "Sammenlign revisjoner";
$lang["PROPCHANGES"] = "Egenskapsendringer :";
$lang["CONVFROM"] = "Denne sammenligningen viser hva som må til for å konvertere stien ";
$lang["TO"] = "med";
$lang["REVCOMP"] = "Baklengs sammenligning";
$lang["COMPPATH"] = "Sammenlign sti:";
$lang["WITHPATH"] = "Med sti:";
$lang["FILEDELETED"] = "Fil slettet";
$lang["FILEADDED"] = "Ny fil";

// The following are defined by some languages to stop unwanted line splitting
// in the template files.

$lang["NOBR"] = "";
$lang["ENDNOBR"] = "";
