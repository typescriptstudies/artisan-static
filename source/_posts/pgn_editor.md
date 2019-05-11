---
title: 'Pgn Editor - an alternative to lichess analysis board / study'
date: 2019-05-11
comments: false
---
# Pgn Editor

Pgn Editor is an open source, lightweight tool for creating, editing and sharing multi variation chess variant games:

- __[Pgn Editor online](https://pgneditor.herokuapp.com)__

- [source code on GitHub](https://github.com/pgneditor/pgneditor)

- [source code on GitLab](https://gitlab.com/pgneditor/pgneditor)

# Motivation

Lichess has two tools for game editing and sharing: [analysis board](https://lichess.org/analysis) and [study](https://lichess.org/study). Both tools have their own shortcomings. For example analysis board cannot import multi variation PGNs, only the main line is imported. It has no persistence, it does not remember the variant it was last set to. Study does not suffer from these disadvantages, however it has its own weaknesses:

- when embedding, only the moves from the main line can be linked, so you have to create a separate study to be able to show a sub variation node

- there is no easy editable text / copy access to the PGN or current line, the only option is to download the whole study or the chapter PGN

- there is no easy way of cloning a study or a chapter

- setting up a study takes several steps, despite in many cases you just want a clean board with the variant starting position

- there is no good visually tractable tree representation of the game

Pgn Editor tries to address these issues and aims to be something in complexity between analysis board and study, without all the shortcomings of the former and adding as much flexibility, convenience and handy features as possible. Pgn Editor on the other is not aimed at multiple contributors, chat or realtime collective editing of the game.

# Organization

Pgn Editor does not make a difference between studies and chapters, every item is like a chapter of a lichess study, has its own title, id and separate existence.

## Default study

Any board editing in Pgn Editor can only be interpreted in the context of a study, so there has to be at least one study, which is generated by default, cannot be deleted or renamed, this is the Default study ( of variant standard ). If you start making moves on a fresh instance of Pgn Editor, these moves will go into the default study.

## Creating a study

To create a new study, go the Studies tab, select a variant from the combo and press "Create new":

![](/assets/screenshots/createstudy.PNG)

You can choose a title by filling in the popup, however a default title is provided, so it is enough to press Ok.

## Selecting a study

There is always exactly one study selected, shown with a different background in the study list. You can select a study by clicking on its title. Upon creation the newly created study becomes selected. After deleting a study, the Default study becomes selected. All editing always pertains to the selected study.

## Editing the title of a study

To edit a study's title, click on the `Edit Title` button of the study.

## Cloning a study

To clone a study, click on the `Clone` button of the study.

## Deleting a study

To delete a study, click on the `Delete` button of the study.

## Editing a study

Editing can be done using the controls above the board:

![](/assets/screenshots/editstudyreset.PNG) &nbsp;&nbsp;&nbsp;reset game, _deletes all moves_

![](/assets/screenshots/editstudytobegin.PNG) &nbsp;&nbsp;&nbsp;jump to the starting position

![](/assets/screenshots/editstudyback.PNG) &nbsp;&nbsp;&nbsp;back one move

![](/assets/screenshots/editstudyforward.PNG) &nbsp;&nbsp;&nbsp;forward one move

![](/assets/screenshots/editstudytoend.PNG) &nbsp;&nbsp;&nbsp;jump to end of line

![](/assets/screenshots/editstudydel.PNG) &nbsp;&nbsp;&nbsp;delete move _and all child moves_

![](/assets/screenshots/editstudyflip.PNG) &nbsp;&nbsp;&nbsp;flip board
