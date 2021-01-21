<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserFormType;
use App\Form\UserFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/userlist", name="app_userList")
     */
    public function userList(UserRepository $userRepository)
    {

        // chercher tous les utilisateurs
        $userList = $userRepository->findAll();
        //afficher dans le twig
        return $this->render('profile/index.html.twig', [
            'userList' => $userList,
        ]);
    }

    /**
     * @Route("/profile/add", name="app_userAdd")
     */
    public function addUser(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User;
        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $roles = $form->get('roles')->getData();
            $user->setRoles([0 => $roles]);
            $plainPassword = $form['password']->getData();


            if (trim($plainPassword) != '') {
                //encrypt pass
                $password = $passwordEncoder->encodePassword($user, $plainPassword);
                $user->setPassword($password);
            } else {
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès');
            return $this->redirectToRoute('app_userList');
        }

        return $this->render('profile/add.html.twig', [
            'form' => $form->createView(),
            'toto' => 'toto'
        ]);
    }

    /**
     * @Route("/profile/edit/{id}", name="app_userEdit")
     */
    public function editUser(EntityManagerInterface $em, User $user, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        $form = $this->createForm(EditUserFormType::class, $user);
        $form->handleRequest($request);

        $me = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();
            //$role = $request->request->get('user')['roles'];
            if ($me != $user) {

                $roles = $form->get('roles')->getData();
                $user->setRoles([0 => $roles]);
            }
            $plainPassword = $form['password']->getData();
            if (trim($plainPassword) != '') {
                //encrypt pass
                $password = $passwordEncoder->encodePassword($user, $plainPassword);
                $user->setPassword($password);
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur mis à jour avec succès');
            return $this->redirectToRoute('app_userList');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/profile/delete/{id}",name="app_userDelete")
     */
    public function deleteProduct(User $user, EntityManagerInterface $em)
    {
        $me = $this->getUser();
        if ($me != $user) {
            // paramConverter
            $em->remove($user);
            $em->flush();

            $this->addFlash('success', 'Utilisateur effacé avec succès');

            return $this->redirectToRoute('app_userList', []);
        } else {
            $this->addFlash('success', 'Whoula ? tu peux pas te supprimer mec ');
            return $this->redirectToRoute('app_userList');
        }
    }
}
