#This is The VCFCat 1.1v

import sys
from PyQt5.QtWidgets import *
 #gui lib
from os import path,mkdir,listdir,remove, rmdir
from shutil import move
from dirsync import sync
from time import sleep
#different supported file formats in arrays 
#more can be added for costomization
VIDEO_FORMAT = ['.mp4', '.mpeg', '.webm', '.wmv', '.3gp', '.mkv']
DOCS_FORMAT = ['.pdf', '.doc', '.xlsm', '.xlsx','.xls', '.csv', '.docx', '.docm', '.odt', '.ppt', '.pptx']
AUDIO_FORMATS = ['.mp3', '.wav', '.ogg', '.wma', '.mid', '.midi']
CODE_FORMATS = ['.c', '.py', '.js', '.ts', '.html','.htm', '.css','.txt', '.json', '.jav', '.java', '.cpp', '.h', '.php', '.xml', '.yml', '.ruby', '.sh', '.cmd']
IMAGE_FORMATS = ['.img', '.jpg', '.jpeg', '.png', '.gif', '.tiff', '.svg']
ZIP_FORMATS = ['.zip', '.tar', '.gz', '.xz', '.xz', '.bz2', '.rar', '.jar', '.7z']
APP_FORMAT = ['.exe']
#Array of The files or folders that can't be coppied
RESTRICTED = ['Video', 'Audio', 'Zips', 'Docs', 'Code', 'Exe', 'Common', 'VCFCat.exe']
PROGRESS = 0
class Application(QDialog):

    def __init__(self):
        super().__init__()
        self.left = 100
        self.top = 100
        self.width = 600
        self.height = 450
        self.title = "VCF Cat"
        self.folderPath = ""
        self.setWindowTitle(self.title)
        self.setGeometry(self.left, self.top, self.width, self.height)
        tabs = QTabWidget() 
        tabs.addTab(FirstTab(), "Catagorizer")
        tabs.addTab(SecondTab(), "Folder Sync")
        tabs.addTab(ThirdTab(), "Matcher")
        vbox = QVBoxLayout()
        vbox.addWidget(tabs)
        self.setLayout(vbox)

# class FirstTab(QWidget):
#     def __init__(self):
#         super().__init__()



class FirstTab(QWidget):
    def __init__(self):
        super().__init__()
        self.folderPath = ""
        self.files = ""
        self.Ui()

    def Ui(self):
        #All the ui element And Controls of the project
        #Browser button that browses the folder to be catagarized
        QLabel("<b style='color:rgb(200,60,0)'>The Categorizer <b>", self)
        Browse_Button = QPushButton("Browse", self)
        Browse_Button.move(400,70)
        Browse_Button.clicked.connect(self.getFolderPath)
        #text edit, shows folder path
        self.file_Name = QTextEdit("", self)
        self.file_Name.setGeometry(50,70,350,35)

        self.Action_Progress = QProgressBar(self)
        self.Action_Progress.setMaximum(100)
        self.Action_Progress.setGeometry(70,125, 450,30)
        #go button
        Cat_Button = QPushButton("Go", self)
        Cat_Button.setGeometry(200,300,100,50)
        #quit button
        Quit_Button = QPushButton("Quit", self)
        Quit_Button.setGeometry(300,300,100,50)
        Quit_Button.clicked.connect(QApplication.instance().quit)
        Cat_Button.clicked.connect(self.CatFolder)
        #message label in bottom left
        self.Message_Box = QLabel("",self)
        self.Message_Box.setText("<b>Select A Folder<b>")
        self.Message_Box.setGeometry(20,360,500,30)
        #Check buttons
        self.Video_Check = QCheckBox("Videos", self) 
        self.Video_Check.setGeometry(50, 200, 100,20)
        self.Audio_Check = QCheckBox("Audios", self) 
        self.Audio_Check.setGeometry(150, 200, 100,20)
        self.Image_Check = QCheckBox("Images", self) 
        self.Image_Check.setGeometry(250, 200, 100,20)
        self.Doc_Check = QCheckBox("Docs", self)
        self.Doc_Check.setGeometry(350, 200, 100,20)
        self.Code_Check = QCheckBox("Code", self)
        self.Code_Check.setGeometry(450, 200, 100,20)
        self.App_Check = QCheckBox("Exe/Run", self)
        self.App_Check.setGeometry(150,230,100,20)
        self.Zip_Check = QCheckBox("Zips", self)
        self.Zip_Check.setGeometry(50, 230, 100,20)
        self.Common_Check = QCheckBox("Common", self)
        self.Common_Check.setGeometry(250,230,100,20)
    
        # self.Common_Check.setToolTip("This are The files that are not identified or may be folders")
        self.show()
#this function that the extention belongs to the given file format array or not
    def match(self,key, b):
        for a in b:
            if(key == a):
                return True
        return False

# This function opens up the file dialog and stores the chosen folder path
    def getFolderPath(self):
        file = QFileDialog.getExistingDirectory(self,'Folder')
        self.folderPath = file
        self.file_Name.setText(file)
        self.Message_Box.setText("<b>Click 'Go' To Catagarize<b>")

#this is the main function where all the required folders are created and files are moved to there required destination autoaticaly, catagarized by extention
    def CatFolder(self):
        self.VidPath = self.folderPath + "/Video"   #paths of required folders to be created on first time use
        self.DocPath = self.folderPath + "/Docs"
        self.AudioPath = self.folderPath + "/Audio"
        self.AppPath = self.folderPath + "/Exe"
        self.CommonPath = self.folderPath + "/Common"
        self.ImagePath = self.folderPath + "/Image"
        self.CodePath = self.folderPath + "/Code"
        self.ZipPath = self.folderPath + "/Zips"
        if(self.folderPath != ""):
           self.files = listdir(self.folderPath) #put all files available in a dir into an array
           
           if(self.Video_Check.isChecked() == True):
                if not path.exists(self.VidPath):
                    mkdir(self.VidPath)
           if(self.App_Check.isChecked() == True):
                if not path.exists(self.AppPath):
                    mkdir(self.AppPath) 
           if(self.Doc_Check.isChecked() == True): 
                if not path.exists(self.DocPath):
                    mkdir(self.DocPath)
           if(self.Audio_Check.isChecked() == True):
                if not path.exists(self.AudioPath):
                    mkdir(self.AudioPath) 
           if(self.Common_Check.isChecked() == True):
                if not path.exists(self.CommonPath):
                    mkdir(self.CommonPath) 
           if(self.Image_Check.isChecked() == True): 
                if not path.exists(self.ImagePath):
                    mkdir(self.ImagePath)
           if(self.Code_Check.isChecked() == True):
               if not path.exists(self.CodePath):
                   mkdir(self.CodePath)
           if(self.Zip_Check.isChecked() == True):
               if not path.exists(self.ZipPath):
                   mkdir(self.ZipPath)
           counter = 0
           for file in self.files: #access files in files array one by one
               filename, exten = path.splitext(file)
               filepath = self.folderPath + "/" + file 
               if(self.Video_Check.isChecked() == True):
                    if(self.match(exten, VIDEO_FORMAT) == True):
                        move(filepath, self.VidPath)
               if(self.App_Check.isChecked() == True): 
                    if(self.match(exten, APP_FORMAT) == True):
                            move(filepath, self.AppPath)
               if(self.Doc_Check.isChecked() == True): 
                    if(self.match(exten, DOCS_FORMAT) == True):
                            move(filepath, self.DocPath) 
               if(self.Audio_Check.isChecked() == True):  
                    if(self.match(exten, AUDIO_FORMATS)):
                        move(filepath, self.AudioPath)
               if(self.Image_Check.isChecked() == True): 
                    if(self.match(exten, IMAGE_FORMATS)):
                        move(filepath, self.ImagePath)
               if(self.Code_Check.isChecked() == True):
                   if(self.match(exten, CODE_FORMATS)):
                       move(filepath, self.CodePath) 
               if(self.Zip_Check.isChecked() == True):
                   if(self.match(exten, ZIP_FORMATS)):
                       move(filepath, self.ZipPath) 
               if(self.Common_Check.isChecked() == True and self.match(file, RESTRICTED) == False): 
                    move(filepath, self.CommonPath)
               counter+=1   
               self.Action_Progress.setValue(int((counter*100)/len(self.files)))
               if(self.Action_Progress.value() == 100):
                   self.Message_Box.setText("<b style='color:green'>Done Catagorizing<b>")
                   sleep(0.5)
                   self.Action_Progress.setValue(0)
           
                
        else:
            self.Message_Box.setText("<b style='color:red'>Please Select A Folder First<b>")

class SecondTab(QWidget):
    def __init__(self):
        super().__init__()
        self.folderPath = ""
        self.files = ""
        self.folderPathFrom= ""
        self.folderPathTo= ""
        self.Ui()

    def Ui(self):
        self.Instruction_Label = QLabel("<b>Select Sync From and Sync To Folders<b>",self)
        self.Instruction_Label.setGeometry(10,370,500,20)

        Sync_Button = QPushButton("Sync", self)
        sync_from_lable = QLabel("Sync From", self)
        sync_from_lable.setGeometry(250,40,80,20)
        sync_to_lable = QLabel("Sync To", self)
        sync_to_lable.setGeometry(250,130,80,20)
        self.From_Folder_Name = QTextEdit("", self)
        self.To_Folder_Name = QTextEdit("", self)
        self.From_Folder_Name.setGeometry(50,70,350,35)
        self.To_Folder_Name.setGeometry(50,160,350,35)
        Browse_Button_From = QPushButton("Browse", self)
        Browse_Button_From.move(400,70)
        Browse_Button_To = QPushButton("Browse", self)
        Browse_Button_To.move(400,160)
        Browse_Button_From.clicked.connect(self.getFolderPathFrom)
        Browse_Button_To.clicked.connect(self.getFolderPathTo)
        self.Action_Progress = QProgressBar(self)
        self.Action_Progress.setMaximum(100)
        self.Action_Progress.setGeometry(70,230, 450,30)
        Sync_Button.setGeometry(250,290,70,40)
        Sync_Button.clicked.connect(self.SyncFolders)
    def getFolderPathTo(self):
        file = QFileDialog.getExistingDirectory(self,'Folder')
        self.folderPathTo = file
        self.To_Folder_Name.setText(file)
    def getFolderPathFrom(self):
        file = QFileDialog.getExistingDirectory(self,'Folder')
        self.folderPathFrom = file
        self.From_Folder_Name.setText(file)
    def SyncFolders(self):
        self.Instruction_Label.setText("<b>Working On It<b>")
        if(sync(self.folderPathFrom, self.folderPathTo,'sync')):
            self.Instruction_Label.setText("<b style='color:green'>Done<b>")

class ThirdTab(QWidget):
    def __init__(self):
        super().__init__()
        self.folderPathIt = ""
        self.folderPathTo = ""
        self.farray = []
        self.sarray = []
        self.Ui()

    def Ui(self):
        self.Instruction_Label = QLabel("<b>Select Match It and Match To Folders<b>",self)
        self.Instruction_Label.setGeometry(10,370,500,20)

        Sync_Button = QPushButton("Match And Delete", self)
        sync_from_lable = QLabel("Match it (Changes Will Be Applied In it)", self)
        sync_from_lable.setGeometry(130,40,350,20)
        sync_to_lable = QLabel("Match To", self)
        sync_to_lable.setGeometry(250,130,80,20)
        self.From_Folder_Name = QTextEdit("", self)
        self.To_Folder_Name = QTextEdit("", self)
        self.From_Folder_Name.setGeometry(50,70,350,35)
        self.To_Folder_Name.setGeometry(50,160,350,35)
        Browse_Button_From = QPushButton("Browse", self)
        Browse_Button_From.move(400,70)
        Browse_Button_To = QPushButton("Browse", self)
        Browse_Button_To.move(400,160)
        Browse_Button_From.clicked.connect(self.getFolderPathIt)
        Browse_Button_To.clicked.connect(self.getFolderPathTo)
        self.Action_Progress = QProgressBar(self)
        self.Action_Progress.setMaximum(100)
        self.Action_Progress.setGeometry(70,230, 450,30)
        Sync_Button.setGeometry(200,290,150,40)
        Sync_Button.clicked.connect(self.MatchFolders)

    def getFolderPathIt(self):
        file = QFileDialog.getExistingDirectory(self,'Folder')
        self.folderPathIt = file
        self.From_Folder_Name.setText(file)
    def getFolderPathTo(self):
        file = QFileDialog.getExistingDirectory(self,'Folder')
        self.folderPathTo = file
        self.To_Folder_Name.setText(file)

    def MatchFolders(self):
        if(self.folderPathIt != self.folderPathTo):
            self.farray = listdir(self.folderPathIt)
            self.sarray = listdir(self.folderPathTo)

            counter = 0
            for checkitfile in self.farray:
                deletefilepath = self.folderPathIt + "/" + checkitfile
                for checktofile in self.sarray:
                    if(checkitfile == checktofile):
                        # print("file matched")
                        try:
                            remove(deletefilepath)
                        except:
                            rmdir(deletefilepath)
                counter += 1
                self.Action_Progress.setValue(int((counter*100)/len(self.farray)))
            self.Instruction_Label.setText("<b>Done<b>")
        else:
            self.Instruction_Label.setText("<b>Both Folders Should Be Different<b>")

App = QApplication(sys.argv)
Application = Application()
Application.show()
sys.exit(App.exec())