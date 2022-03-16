<?php

namespace App\Controller;

use App\Calculator\Operation;
use App\Form\CalculatorForm;
use App\Service\CalculatorService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/", name="calculator")
     * @param Request $request
     * @param CalculatorService $calculator
     * @return Response
     */
    public function index(Request $request, CalculatorService $calculator): Response
    {
        $error_message = "";
        $result = 0;
        $operation = new Operation();
        $form = $this->createForm(CalculatorForm::class, $operation);

        try {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $operation = $form->getData();
                $result = $calculator->calculate(
                    $operation->getOperand1(),
                    $operation->getOperand2(),
                    $operation->getOperator()
                );
            }
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
        }


        return $this->renderForm(
            "calculator/index.html.twig",
            [
                "form" => $form,
                "result" => $result,
                "error_message" => $error_message
            ]
        );
    }
}
