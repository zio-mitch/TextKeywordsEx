# Basic Usage

$informationBlocks = HtmlDocumentInformationBlocksExtractor::extract(file_get_contents('https://github.com/Pherserk/HtmlDocInfoEx'), 128)->getAll();