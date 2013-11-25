<?php
class KantonController{

	private $request = null;
	private $template = '';
	private $view = null;

	/**
	 * Konstruktor, erstellet den Controller.
	 *
	 * @param Array $request Array aus $_GET & $_POST.
	 */
	public function __construct($request){
                $this->view = new KantonView();
		$this->request = $request;
		$this->template = !empty($request['service']) ? $request['methode'] : 'default';
	}

	/**
	 * Methode zum anzeigen des Contents.
	 *
	 * @return String Content der Applikation.
	 */
	public function display(){
		$view = new KantonView();
		switch($this->template){
			case 'single':
				$view->setTemplate('single');
				$entryid = strtoupper($this->request['id']);
				$canton = KantonModel::getEntry($entryid);
				$view->assign('Kürzel', $canton['Kürzel']);
				$view->assign('Kanton', $canton['Kanton']);
                                $view->assign('Standesstimme', $canton['Standesstimme']);
                                $view->assign('Beitritt', $canton['Beitritt']);
                                $view->assign('Hauptort', $canton['Hauptort']);
                                $view->assign('Einwohner 1', $canton['Einwohner 1']);
                                $view->assign('Ausländer 2', $canton['Ausländer 2']);
                                $view->assign('Fläche 3', $canton['Fläche 3']);
                                $view->assign('Dichte 4', $canton['Dichte 4']);
                                $view->assign('Gemeinden 6', $canton['Gemeinden 6']);
                                $view->assign('Amtssprache', $canton['Amtssprache']);
				break;
		
			case 'list':
                        default:
				//$cantons = KantonModel::getEntries();
                                $cantons = KantonModel::getEntriesSorted($this->request['sort']);
				$view->setTemplate('default');
				$view->assign('cantons', $cantons);
		}
		$this->view->setTemplate('theblog');
		$this->view->assign('blog_title', 'Kantone');
		$this->view->assign('blog_footer', 'Ersteller: Roger Bollmann');
		$this->view->assign('blog_content', $view->loadTemplate());
		return $this->view->loadTemplate();
	}
}
?>